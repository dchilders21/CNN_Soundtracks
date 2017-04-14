import React, { Component } from 'react';

export default class VHMWidget extends Component {

  componentDidMount() {
    let widget = document.createElement('iframe');
    widget.id = 'vhmwidget_' + this.props.elementId;
    widget.src = 'http://vhmengine.com/widgets/view?eventId=' + this.props.eventId + '&colorScheme=' + this.props.colorScheme + '&thumbSize='+ this.props.thumbSize + (this.props.dynamicHeight ? '&dynamicHeight=true' : '');
    widget.frameBorder = 0;
    widget.width = this.props.width;
    widget.height = this.props.height;

    this.instance.appendChild(widget);

    if (this.props.dynamicHeight) {
      let inst = this.instance;
      let props = this.props;

      let pf = document.createElement('script');
      pf.type = 'text/javascript';
      pf.src = '//static.vhmengine.com/ie8.polyfils.min.js';
      pf.onload = function () {
        let ir = document.createElement('script');
        ir.type = 'text/javascript';
        ir.src = '//static.vhmengine.com/iframeResizer.min.js';
        ir.onload = function () {
          let ws = document.createElement('script');
          ws.type = 'text/javascript';
          ws.innerHTML = 'iFrameResize({},"#vhmwidget_' + props.elementId + '");';
          inst.appendChild(ws);
        };
        inst.appendChild(ir);
      };
      this.instance.appendChild(pf);
    }
  }

  render() {
    return (
        <div ref={(el) => (this.instance = el)} id={this.props.elementId}/>
    )
  }
}

