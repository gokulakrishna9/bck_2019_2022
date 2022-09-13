import React, { Component } from 'react';
import { v4 } from 'uuid';
//course, course_fee, case for this course section, topic
// batch has course, has student
class Batch extends Component {
  render() {
    return (
      <React.Fragment>
        <div className="w3-container w3-margin">
          <div className="w3-panel w3-blue">
            <h3>Add Batch</h3>
            <p>Blue often indicates a neutral informative change or action.</p>
          </div>
        </div>
        <div className="w3-container w3-margin-top">
          <div className="w3-row w3-margin-bottom">
            <div className="w3-col s12 m3 l3 w3-margin-left">
              <label className="w3-text-teal"><b>Course Name:</b></label>
              <select class="w3-select w3-border" name="option">
                <option value="" disabled selected>Choose your option</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
              </select>
            </div>
            <div className="w3-col s12 m3 l3 w3-margin-left" >
              <label className="w3-text-teal"><b>Batch Name:</b></label>
              <input className="w3-input w3-border" type="text" placeholder="Batch Name"></input>
            </div>
            <div className="w3-col s12 m2 l2 w3-margin-left" >
              <label className="w3-text-teal"><b>Batch Fee:</b></label>
              <input className="w3-input w3-border" type="text" placeholder="Batch Fee"></input>
            </div>
            <div className="w3-col s12 m1 l1 w3-margin-left">
              <label className="w3-text-teal"><b>Sort Order:</b></label>
              <input className="w3-input w3-border" type="text" placeholder="Sort Order"></input>
            </div>
            <div className="w3-col s5 m1 l1 w3-margin-left">
              <label className="w3-text-teal"><b>Active:</b></label>&nbsp;<br />
              <input className="w3-check" type="checkbox"></input>
            </div>
          </div>
          <div className="w3-row w3-margin-bottom">
            <div className="w3-col s12 m4 l4 w3-margin-left">
              <label className="w3-text-teal"><b>Batch Start:</b></label>
              <input className="w3-input w3-border w3-margin-bottom" type="text" placeholder="Batch Start"></input>
              <label className="w3-text-teal"><b>Batch End:</b></label>
              <input className="w3-input w3-border" type="text" placeholder="Batch End"></input>
            </div>
            <div className="w3-col s12 m4 l4 w3-margin-left">
              <div className="w3-row w3-margin-bottom">
                <div className="w3-col s12 m4 l4">
                  <label className="w3-text-teal"><b>Session Start:</b></label>
                  <input className="w3-input w3-border" type="text" placeholder="Batch Start"></input>
                </div>
                <div className="w3-col s12 m4 l4  w3-margin-left">
                  <label className="w3-text-teal"><b>Session End:</b></label>
                  <input className="w3-input w3-border" type="text" placeholder="Batch End"></input>
                </div>
              </div>
              <div className="w3-row w3-margin-bottom">
                <div className="w3-col s12 m4 l4">
                  <label className="w3-text-teal"><b>Lab Start:</b></label>
                  <input className="w3-input w3-border" type="text" placeholder="Batch Start"></input>
                </div>
                <div className="w3-col s12 m4 l4 w3-margin-left">
                  <label className="w3-text-teal"><b>Lab End:</b></label>
                  <input className="w3-input w3-border" type="text" placeholder="Batch End"></input>
                </div>
              </div>
            </div>
            <div className="w3-col s12 m3 l3 w3-margin-left">
              <label className="w3-text-teal w3-margin-left"><b>Sessions:</b></label><br />
              <div className="w3-row w3-margin-bottom w3-margin-left">
                <div className="w3-col s12 m3 l3">
                  <label className=""><b>Monday</b></label>&nbsp;
                  <input className="w3-check" type="checkbox"></input>&nbsp;
                </div>
                <div className="w3-col s12 m3 l3">
                  <label className=""><b>Tuesday</b></label>&nbsp;
                  <input className="w3-check" type="checkbox"></input>&nbsp;
                </div>
                <div className="w3-col s12 m3 l3">
                  <label className=""><b>Wednesday</b></label>&nbsp;
                  <input className="w3-check" type="checkbox"></input>&nbsp;
                </div>
              </div>
              <div className="w3-row w3-margin-bottom w3-margin-left">
                <div className="w3-col s12 m3 l3">
                  <label className=""><b>Thursday</b></label>&nbsp;
                  <input className="w3-check" type="checkbox"></input>&nbsp;
                </div>
                <div className="w3-col s12 m3 l3">
                  <label className=""><b>Friday</b></label>&nbsp;&nbsp;
                  <input className="w3-check" type="checkbox"></input>&nbsp;
                </div>
                <div className="w3-col s12 m3 l3">
                  <label className=""><b>Saturday</b></label>&nbsp;
                  <input className="w3-check" type="checkbox"></input>
                </div>
              </div>
            </div>
          </div>
          <div className="w3-row w3-margin-bottom">
            <div className="w3-col s12 m11 l11 w3-margin-left w3-right-align">
              <br />
              <button className="w3-button w3-teal">Save</button>
            </div>
          </div>
        </div>
        <div className="w3-container w3-margin">
          <table className="w3-table-all">
            <tr>
              <th>#</th>
              <th>Fee</th>
              <th>Student</th>
              <th>Course Name</th>
              <th>Batch Name</th>
              <th>Batch Fee</th>
              <th>Batch Start</th>
              <th>Batch End</th>
              <th>Session Start</th>
              <th>Session End</th>
              <th>Lab Start</th>
              <th>Lab End</th>
              <th>Sessions</th>
              <th>Sort</th>
              <th>Active</th>
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

export default Batch;