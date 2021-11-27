const express = require("express");
const bodyParser = require("body-parser");
const app = express();
const email = require("./mail");
const port = process.env.PORT || 5000;

app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: false }));

app.use("/", email);

app.listen(port, () => {
  console.log(`Server listening on port ${port}`);
});
