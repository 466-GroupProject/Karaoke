<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

/* FROM https://www.w3schools.com/howto/howto_css_button_group.asp 
    
  Formatting the buttons 
*/

.btn-group button {
  background-color: #04AA6D; /* Green background */
  border: 1px solid green; /* Green border */
  color: white; /* White text */
  padding: 10px 24px; /* Some padding */
  cursor: pointer; /* Pointer/hand icon */
  float: left; /* Float the buttons side by side */
  }

.button1{
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}

.button2{
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(+43%, -50%);
  transform: translate(+43%, -50%);
}

.button3{
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-160%, -50%);
  transform: translate(-160%, -50%);
}

.button4{
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-290%, -50%);
  transform: translate(-290%, -50%);
}

.btn-group button:not(:last-child) {
  border-right: none; /* Prevent double borders */
}

/* Clear floats (clearfix hack) */
.btn-group:after {
  content: "";
  clear: both;
  display: table;
}

/* Add a background color on hover */
.btn-group button:hover {
  background-color: #3e8e41;
}

/*  For the Searching Artist and Title Table  */
* {
  box-sizing: border-box;
}
.row {
  margin-left:-5px;
  margin-right:-5px;
}
.column {
  float: left;
  width: 50%;
  padding: 5px;
}
.row::after {
  content: "";
  clear: both;
  display: table;
}
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}
th, td {
  text-align: left;
  padding: 16px;
}

/*  For the middle Search Bar and Submit Button*/
.midnav .search-container {
  float: none;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-46%, -525%);
}
.midnav .search-container2 {
  float: none;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-46%, +725%);
}
.midnav .search-container3 {
  float: none;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(+160%, -680%);
}
.midnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: 1;
}

.midnav .search-container button {
  float: center;
  padding: 6px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
  background-color: #04AA6D; /* Green background */
  border: 1px solid green; /* Green border */
  color: white; /* White text */
  padding: 7px 15px; /* Some padding */
}

.midnav .search-container2 button {
  float: center;
  padding: 6px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
  background-color: #04AA6D; /* Green background */
  border: 1px solid green; /* Green border */
  color: white; /* White text */
  padding: 7px 15px; /* Some padding */
}

.midnav .search-container3 button {
  float: center;
  padding: 6px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
  background-color: #04AA6D; /* Green background */
  border: 1px solid green; /* Green border */
  color: white; /* White text */
  padding: 7px 15px; /* Some padding */
}

/*  For the Choose Existing Button */

.dropbtn {
  background-color: white;
  color: white;
  padding: 6px;
  font-size: 13px;
  border: none;
  cursor: pointer;
}


.dropdown {
  position: relative;
  display: inline-block;
}

.dropdownC {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    overflow: auto;
    box-shadow: 0px 10px 17px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdownC a {
  color: black;
  padding: 7px 15px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}
.show {display: block;}


.fixedh1 {
  position: absolute;
  top: 850px;
  left: 830px;
}

</style>



</head>
</html>