export const headerRoutes = [
  {
    route_id: '1',
    label: 'Course',
    active_class: 'w3-amber',
    page: 'course',
    sort_order: '1'
  },
  {
    route_id: '2',
    label: 'Topic',
    active_class: '',
    page: 'topic',
    sort_order: '2'
  },
  {
    route_id: '3',
    label: 'Application',
    active_class: '',
    page: 'course_use',
    sort_order: '2'
  },
  {
    route_id: '4',
    label: 'Student',
    active_class: '',
    page: 'student',
    sort_order: '3'
  },
  {
    route_id: '5',
    label: 'Payment',
    active_class: '',
    page: 'fee_payment',
    sort_order: '3'
  },
  {
    route_id: '6',
    label: 'Batch',
    active_class: '',
    page: 'batch',
    sort_order: '4'
  }
];

export const leftNavRoutes = [
  {
    route_id: '',
    active_class: '',
    page: '',
    sort_order: ''
  }
];

/*
  page: {
    forms: {
      visible: [],
      hidden: []
    },
    table: []
  }
*/

const pageComponents = {
  'course': {
    forms: {
      visible: [],
      hidden: []
    },
    table: []
  }
}