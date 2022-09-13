import * as React from "react";
import Table from "@mui/material/Table";
import TableBody from "@mui/material/TableBody";
import TableCell from "@mui/material/TableCell";
import TableContainer from "@mui/material/TableContainer";
import TableHead from "@mui/material/TableHead";
import TableRow from "@mui/material/TableRow";
import Paper from "@mui/material/Paper";
import Button from "@mui/material/Button";

import ServerRoute from "../server_routes";
import axios from "axios";
import _ from "lodash";

function serverCall(dataURL, queryString, callBackMethod) {
  console.log(queryString);
  axios
    .get(ServerRoute.base_url + dataURL.url, {
      params: { qry_string: queryString },
    })
    .then((response) => {
      callBackMethod(response.data);
    });
}

export default function DenseTable(tblProps) {
  const [table_header, setTableHeader] = React.useState({});
  const [table_data, setTableData] = React.useState([]);
  const [primary_key, setPrimaryKey] = React.useState([]);

  React.useEffect(() => {
    // props filter condition
    console.log(tblProps.servOperator);
    serverCall(tblProps.servOperator, {}, (response) => {
      //callBackMethod(_.uniqBy([...prevVal, ...response.data], 'value'));
      let primaryKey = {};
      let tableHeader = {};
      _.forEach(response.header, (val, key) => {
        if (key !== response.primary_key) {
          tableHeader[key] = val;
        } else {
          primaryKey = { [key]: val };
        }
      });
      console.log(primaryKey);
      console.log(tableHeader);
      setTableHeader(tableHeader);
      setPrimaryKey(response.primary_key);
      // perform the header key sort here
      setTableData(response.table_data);
      // split table header in primary and non primary
    });
  }, []);

  return (
    <TableContainer component={Paper}>
      <Table sx={{ minWidth: 650 }} size="small" aria-label="a dense table">
        <TableHead>
          <TableRow>
            {_.map(_.values(table_header), (hd) => {
              return <TableCell align="right">{hd}</TableCell>;
            })}
            <TableCell align="right">&nbsp;</TableCell>
            <TableCell align="right">&nbsp;</TableCell>
            <TableCell align="right">&nbsp;</TableCell>
          </TableRow>
        </TableHead>
        <TableBody>
          {_.map(table_data, (tdR) => (
            <TableRow
              key={tdR["ad_numberad_record_id"]}
              sx={{ "&:last-child td, &:last-child th": { border: 0 } }}
            >
              {_.map(_.keys(table_header), (key) => {
                return <TableCell align="right">{tdR[key]}</TableCell>;
              })}
              <TableCell align="right">
                <Button variant="contained" onClick={""}>
                  View
                </Button>
              </TableCell>
              <TableCell align="right">
                <Button
                  variant="contained"
                  onClick={() => {
                    tblProps.onUpdateClick(tdR[primary_key]);
                  }}
                >
                  Update
                </Button>
              </TableCell>
              <TableCell align="right">
                <Button variant="contained" onClick={""}>
                  Delete
                </Button>
              </TableCell>
            </TableRow>
          ))}
        </TableBody>
      </Table>
    </TableContainer>
  );
}
