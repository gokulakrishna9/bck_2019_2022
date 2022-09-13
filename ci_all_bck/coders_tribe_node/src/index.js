import React from 'react';
import ReactDOM from 'react-dom';
import { Provider } from 'react-redux';
import { createStore } from 'redux';
import rootReducer from './redux/index';
import App from './App';
import * as serviceWorker from './serviceWorker';
import {headerRoutes, leftNavRoutes} from './app_build_data/navigation';

const store = createStore(rootReducer, {headers: headerRoutes, leftNav: leftNavRoutes});

ReactDOM.render(
  <Provider store={store}>
    <App />
  </Provider>,
  document.getElementById('root')
);

// If you want your app to work offline and load faster, you can change
// unregister() to register() below. Note this comes with some pitfalls.
// Learn more about service workers: https://bit.ly/CRA-PWA
serviceWorker.unregister();
