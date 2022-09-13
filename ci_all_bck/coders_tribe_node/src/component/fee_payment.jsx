import React, { Component } from 'react';
import { v4 } from 'uuid';
class Payment extends Component {
  render() {
    /**
     * payment 	transaction_type 	transaction_id 	transaction_date
     */
    return (
      <React.Fragment>
        <div className="w3-container w3-margin">
          <div className="w3-panel w3-blue">
            <h3>Fee Payment</h3>
            <p>Student</p>
          </div>
        </div>
        <div className="w3-container w3-margin-top">
          <div className="w3-row w3-margin-bottom">
            <div className="w3-col s12 m2 l2 w3-margin-left">
              <label className="w3-text-teal"><b>Batch Name:</b></label>
              <select class="w3-select w3-border" name="option">
                <option value="" disabled selected>Choose your option</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
              </select>
            </div>
            <div className="w3-col s12 m1 l1 w3-margin-left" >
              <label className="w3-text-teal"><b>Payment:</b></label>
              <input className="w3-input w3-border" type="text" placeholder="Payment"></input>
            </div>
            <div className="w3-col s12 m2 l2 w3-margin-left" >
              <label className="w3-text-teal"><b>Transaction Type:</b></label>
              <input className="w3-input w3-border" type="text" placeholder="Transaction Type"></input>
            </div>
            <div className="w3-col s12 m3 l3 w3-margin-left">
              <label className="w3-text-teal"><b>Transaction Number:</b></label>
              <input className="w3-input w3-border" type="text" placeholder="Transaction Number"></input>
            </div>
            <div className="w3-col s12 m3 l3 w3-margin-left">
              <label className="w3-text-teal"><b>Transaction Date:</b></label>
              <input className="w3-input w3-border" type="text"></input>
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
              <th>Student</th>
              <th>Batch</th>
              <th>Payment</th>
              <th>Transaction Type</th>
              <th>Transaction Number</th>
              <th>Transaction Date</th>
            </tr>
            <tr>
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

export default Payment;