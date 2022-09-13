import { combineReducers } from 'redux';
import header from './reducers';
import leftNav from './reducers';
import table from './reducers';
import form from './reducers';

export default combineReducers({
  headers: header,
  leftNav: leftNav,
  formFields: form,
  tableRows: table
});