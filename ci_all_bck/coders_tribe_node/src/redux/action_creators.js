/*
import {
  SET_HEADERS, HEADER_CHANGE, 
  SET_LEFTNAV, 
  LEFT_NAV_CHANGE, SET_FORM_FIELDS,
  ADD_DATA
} from './action_constants';
*/
import {SET_HEADERS} from './action_constants';
import {HEADER_CHANGE} from './action_constants';
import {SET_LEFTNAV} from './action_constants';
import {LEFT_NAV_CHANGE} from './action_constants';
import {SET_FORM_FIELDS} from './action_constants';
import {SET_FORM_FIELD_VALUES} from './action_constants';
import {ADD_DATA} from './action_constants';

export function setHeaders(headers){
  return {
    type: SET_HEADERS,
    headers
  }
}

export function headerChange(route_id){
  console.log('Header Change '+ HEADER_CHANGE);
  return {
    type: HEADER_CHANGE,
    route_id
  }
}

export function setLeftNav(leftNavRoutes){
  return {
    type: SET_LEFTNAV,
    leftNavRoutes
  }
}

export function leftNavChange(routeId){
  return {
    type: LEFT_NAV_CHANGE,
    routeId
  }
}

export function setAllFormFields(fieldValues){
  return {
    type: SET_FORM_FIELDS,
    fieldValues
  }
}

export function addData(dataObject){
  return {
    type: ADD_DATA,
    dataObject
  }
}