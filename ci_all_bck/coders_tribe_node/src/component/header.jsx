import React, { Component, Suspense } from 'react';
import { v4 } from 'uuid';
import logo from '../images/code_tri.svg';
import { connect } from 'react-redux';
import { headerChange } from '../redux/action_creators';
import _ from 'lodash';

const mapStateToProps = (state) => ({
  headers: state.headers
});

const mapDispatchToProps = dispatch => ({
  routeChangeAction: route_id => dispatch(headerChange(route_id))
});

class AppHeader extends Component {
  constructor(props) {
    super();
    console.log('Re-drawing component');
  }

  routeChange = (route_id, e) => {
    e.preventDefault();
    console.log(route_id);
    this.props.routeChangeAction(route_id);
  }

  render() {
    console.log(this.props.headers);
    const header = this.props.headers.map(
      (header) => <a key={v4()} href="#" onClick={(e) => this.routeChange(header.route_id, e)} className={"w3-bar-item w3-button " + header.active_class}><h5>{header.label}</h5></a>
    );
    let component = _.find(this.props.headers, function (header) { return header.active_class != '' }).page
    console.log(component);
    let Page = React.lazy(() => import('./' + component));
    return (
      <React.Fragment>
        <div className="w3-bar w3-khaki">
          <a href="#" className="w3-bar-item w3-button">
            <img style={{ width: '180px', height: '47px' }} src={logo} className="w3-round" alt="Coders Tribe Logo"></img>
          </a>
          {header}
        </div>
        <Suspense fallback={<div>Loading...</div>}>
          <Page />
        </Suspense>
      </React.Fragment>
    );
  }
}

export default connect(mapStateToProps, mapDispatchToProps)(AppHeader);