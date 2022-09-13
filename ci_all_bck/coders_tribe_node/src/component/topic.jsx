import React, { Component } from 'react';
import { v4 } from 'uuid';
// ct_section, topic_name, topic_description, sort_order, active
class Topic extends Component {
  render() {
    return (
      <React.Fragment>
        <div className="w3-container w3-margin">
          <div className="w3-panel w3-blue">
            <h3>Add Topic</h3>
            <p>Course Name:</p>
          </div>
        </div>
        <div className="w3-container w3-margin-top">
          <div className="w3-row w3-margin-bottom">
            <div className="w3-col s12 m3 l3 w3-margin-left">
              <label className="w3-text-teal"><b>Section Name:</b></label>
              <input className="w3-input w3-border" list="ct_section"  name="ct_section" />
              <datalist id="ct_section" className="w3-khaki">
                <option value="Internet Explorer" />
                <option value="Firefox" />
                <option value="Chrome" />
                <option value="Opera" />
                <option value="Safari" />
              </datalist>
            </div>
            <div className="w3-col s12 m3 l3 w3-margin-left" >
              <label className="w3-text-teal"><b>Topic Name:</b></label>
              <input className="w3-input w3-border" list="ct_section"  name="ct_section" />
            </div>
            <div className="w3-col s12 m4 l3 w3-margin-left" >
              <label className="w3-text-teal"><b>Topic Description:</b></label>
              <textarea className="w3-input w3-border" type="text" placeholder="Topic Description"></textarea>
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
              <th>Update</th>
              <th>Course</th>
              <th>Section</th>
              <th>Topic</th>
              <th>Topic Description</th>
              <th>Sort Order</th>
              <th>Active Batches</th>
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
            </tr>
          </table>
        </div>
      </React.Fragment>
    );
  }
}

export default Topic;