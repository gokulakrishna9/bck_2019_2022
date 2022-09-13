import {SET_HEADERS} from './action_constants';
import {UPDATE_DATA} from './action_constants';
import {HEADER_CHANGE} from './action_constants';
import {SET_LEFTNAV} from './action_constants';
import {LEFT_NAV_CHANGE} from './action_constants';
import {SET_FORM_FIELDS} from './action_constants';
import {SET_FORM_FIELD_VALUES} from './action_constants';
import {ADD_DATA} from './action_constants';

const header = (headers = [], action) => {
  console.log('State change');
  console.log(action);
  switch (action.type) {
    case SET_HEADERS:
      return headers;
    case HEADER_CHANGE:      
      return headers.map(header => header.route_id === action.route_id ? {
        ...header, active_class: 'w3-amber'
      } : {...header, active_class: ''});
    default:
      return headers;
  }
}

export function leftNav(leftNav = [], action){
  switch (action.type) {
    case SET_LEFTNAV:
      return action.headers;
    case HEADER_CHANGE:
      return leftNav.map(nav => nav.route_id === action.route_id ?
        { ...nav, currentRouteGroup: true } : { ...nav, currentRouteGroup: false });
    case LEFT_NAV_CHANGE:
      return leftNav.map(nav => nav.currentRouteGroup && nav.route_id === action.route_id ?
        { ...nav, currentRoute: true } : { ...nav, currentRoute: false });
    default:
      return leftNav;
  }
}

export function form(allFormFields = [], action){
  switch (action.type) {
    case SET_FORM_FIELDS:
      return action.headers;
    case HEADER_CHANGE:
      return allFormFields.map(formFields => formFields.route_id === action.route_id ?
        { ...formFields, currentRouteGroup: true } : { ...formFields, currentRouteGroup: false });
    case LEFT_NAV_CHANGE:
      return allFormFields.map(formFields => formFields.route_id === action.route_id ?
        { ...formFields, currentRouteGroup: true } : { ...formFields, currentRouteGroup: false });
    case UPDATE_DATA:
      return allFormFields.map(formFields => formFields.route_id === action.route_id ?
        { ...formFields, fieldValues: action.form_values } : formFields);
    default:
      return allFormFields;
  }
}

export function table(records = [], action){
  switch (action.type) {
    case SET_FORM_FIELDS:
      return action.headers;
    case HEADER_CHANGE:
      return records.map(formFields => formFields.route_id === action.route_id ?
        { ...formFields, currentRouteGroup: true } : { ...formFields, currentRouteGroup: false });
    case LEFT_NAV_CHANGE:
      return records.map(formFields => formFields.route_id === action.route_id ?
        { ...formFields, currentRouteGroup: true } : { ...formFields, currentRouteGroup: false });
    case UPDATE_DATA:
      return records.map(formFields => formFields.route_id === action.route_id ?
        { ...formFields, currentRouteGroup: true } : { ...formFields, currentRouteGroup: false });
    default:
      return records;
  }
}

export default header;