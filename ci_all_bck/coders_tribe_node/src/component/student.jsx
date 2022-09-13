import React, { Component } from 'react';
import { v4 } from 'uuid';
class Course extends Component {
  render() {
    return (
      <React.Fragment>
        <div className="w3-container w3-margin">
          <div className="w3-panel w3-blue">
            <h3>Add Student</h3>
            <p>Blue often indicates a neutral informative change or action.</p>
          </div>
        </div>
        <div className="w3-container w3-margin-top">
          <div className="w3-row w3-margin-bottom">
            <div className="w3-col s12 m4 l4 w3-margin-left">
              <label className="w3-text-teal"><b>First Name:</b></label>
              <input className="w3-input w3-border" type="text" placeholder="First Name"></input>
            </div>
            <div className="w3-col s12 m4 l4 w3-margin-left" >
              <label className="w3-text-teal"><b>Last Name:</b></label>
              <input className="w3-input w3-border" type="text" placeholder="Last Name"></input>
            </div>
            <div className="w3-col s12 m3 l3 w3-margin-left" >
              <label className="w3-text-teal"><b>Phone:</b></label>
              <input className="w3-input w3-border" type="text" placeholder="Phone"></input>
            </div>
          </div>
          <div className="w3-row w3-margin-bottom">
            <div className="w3-col s12 m2 l2 w3-margin-left">
              <label className="w3-text-teal"><b>Age:</b></label>
              <input className="w3-input w3-border" type="text" placeholder="Age"></input>
            </div>
            <div className="w3-col s12 m2 l2">
              &nbsp;
            </div>
            <div className="w3-col s12 m2 l2 w3-left-align w3-margin-left" >
              <label className="w3-text-teal"><b>Gender:</b></label><br />
              <input class="w3-radio" type="radio" name="gender" value="male" checked />
              <label>Male</label>&nbsp;
              <input class="w3-radio" type="radio" name="gender" value="female" />
              <label>Female</label>&nbsp;
              <input class="w3-radio" type="radio" name="gender" value="other" />
              <label>Other</label>&nbsp;
            </div>
            <div className="w3-col s12 m2 l2">
              &nbsp;
            </div>
            <div className="w3-col s12 m3 l3 w3-margin-left" >
              <label className="w3-text-teal"><b>Home Address:</b></label>
              <textarea className="w3-input w3-border" type="text" placeholder="Home Address"></textarea>
            </div>
          </div>
          <div className="w3-row w3-margin-bottom">
            <div className="w3-col s12 m4 l4 w3-margin-left">
              <label className="w3-text-teal"><b>Guardian First Name:</b></label>
              <input className="w3-input w3-border" type="text" placeholder="Guardian First Name"></input>
            </div>
            <div className="w3-col s12 m4 l4 w3-margin-left" >
              <label className="w3-text-teal"><b>Guardian Last Name:</b></label>
              <input className="w3-input w3-border" type="text" placeholder="Guardian Last Name"></input>
            </div>
            <div className="w3-col s12 m3 l3 w3-margin-left" >
              <label className="w3-text-teal"><b>Guardian Phone:</b></label>
              <input className="w3-input w3-border" type="text" placeholder="Guardian Phone"></input>
            </div>
          </div>
          <div className="w3-row w3-margin-bottom">
            <div className="w3-col s12 m4 l4 w3-margin-left" >
              <label className="w3-text-teal"><b>Highest Qualification:</b></label>
              <input className="w3-input w3-border" type="text" placeholder="Highest Qualification"></input>
            </div>
            <div className="w3-col s12 m4 l4 w3-margin-left">
              <label className="w3-text-teal"><b>Institution Name:</b></label>
              <input className="w3-input w3-border" type="text" placeholder="Institution Name"></input>
            </div>
            <div className="w3-col s12 m3 l3 w3-margin-left" >
              <label className="w3-text-teal"><b>Institution Address:</b></label>
              <textarea className="w3-input w3-border" type="text" placeholder="Institution Address"></textarea>
            </div>
          </div>
          <div className="w3-row w3-margin-bottom">
            <div className="w3-col s12 m11 l11 w3-margin w3-right-align">
              <button className="w3-button w3-teal">Save</button>
            </div>
          </div>
        </div>  {/*container close*/}
        {
          /**
            first_name 	last_name 	student_mobile guardian_first_name 	guardian_last_name 	last_institution 	institution_place 	highest_education 	age 	gender 	address_street_line_one 	address_street_line_two 	city 	pin 
           */
        }

        <div className="w3-container w3-margin">
          <table className="w3-table-all">
            <tr>
              <th>#</th>
              <th>Payment</th>
              <th>Batch</th>
              <th>Name</th>
              <th>Mobile</th>
              <th>Gender</th>
              <th>Guardian</th>
              <th>Qualification</th>
              <th>Home Address</th>
              <th>Institution</th>
              <th>Batches</th>
              <th>Payments</th>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
          </table>
        </div>
      </React.Fragment>
    );
  }
}

export default Course;

/*
*   View course is a join with batches count and current batches{batch has fee} and fee
*/