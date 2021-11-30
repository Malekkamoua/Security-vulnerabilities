const nodemailer = require("nodemailer");
const dotenv = require("dotenv");
dotenv.config();

const router = require("express").Router();

router.post("/email", async (req, res) => {
  let transporter = nodemailer.createTransport({
    secure: false,
    service: "gmail",
    auth: {
      user: process.env.EMAIL,
      pass: process.env.PASSWORD,
    },
  });

  let info = await transporter.sendMail({
    from: process.env.EMAIL,
    to: req.body.sender,
    subject: req.body.subject,
    text: req.body.text,
  });

  console.log("Message sent: %s", info.messageId);
  res.send("Email sent with success");
});

module.exports = router;
