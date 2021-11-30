const express = require("express");
const bodyParser = require("body-parser");
var path = require("path");

const app = express();
const email = require("./mail");
const port = process.env.PORT || 5000;

app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: false }));
app.use(express.static(path.join(__dirname, "public")));

app.use("/", email);
app.get("/", function (req, res) {
  res.sendFile(__dirname + "/index.html");
});

app.listen(port, () => {
  console.log(`Server listening on port ${port}`);
});
