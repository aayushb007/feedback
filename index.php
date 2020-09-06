

<!DOCTYPE html>
<html>
  <head>
    <title>Volunteer Sign up form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, textarea, label, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin: 0;
      font-size: 40px;
      color: #fff;
      z-index: 2;
      line-height: 83px;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
      form {
      width: 100%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 8px  #669999; 
      }
      .banner {
      position: relative;
      height: 100px;
      background-color: #666;  
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      background-color: rgba(0, 0, 0, 0.3); 
      position: absolute;
      width: 100%;
      height: 100%;
      }
      input, select, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      input[type="date"] {
      padding: 4px 5px;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
      color:  #669999;
      }
      .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 3px 0  #669999;
      color: #669999;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      .item span {
      color: red;
      }
      .week {
      display:flex;
      justifiy-content:space-between;
      }
      .colums {
      display:flex;
      justify-content:space-between;
      flex-direction:row;
      flex-wrap:wrap;
      }
      .colums div {
      width:48%;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color:  #a3c2c2;
      }
      .item i {
      right: 1%;
      top: 30px;
      z-index: 1;
      }
      input[type=radio], input[type=checkbox]  {
      display: none;
      }
      label.radio {
      position: relative;
      display: inline-block;
      margin: 5px 20px 15px 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      .question-answer label {
      display: block;
      }
      label.radio:before {
      content: "";
      position: absolute;
      left: 0;
      width: 17px;
      height: 17px;
      border-radius: 50%;
      border: 2px solid #ccc;
      }
      input[type=radio]:checked + label:before, label.radio:hover:before {
      border: 2px solid  #669999;
      }
      label.radio:after {
      content: "";
      position: absolute;
      top: 6px;
      left: 5px;
      width: 8px;
      height: 4px;
      border: 3px solid  #669999;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after {
      opacity: 1;
      }
      .flax {
      display:flex;
      justify-content:space-around;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background:  #669999;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background:  #a3c2c2;
      }
      @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input, .name-item div {
      width: calc(50% - 20px);
      }
      .name-item div input {
      width:97%;}
      .name-item div label {
      display:block;
      padding-bottom:5px;
      }
      }
    </style>
  </head>
  <body>
    <div class="testbox">
      <form action="action.php" method="POST">
        <div class="banner">
          <h1>Students Feedback</h1>
        </div>
        <br/>
        <p>The HELP Group is seeking volunteers to serve our community. Fill in the information below to indicate how you would like to become involved.</p>
        <br/>
        <div class="colums">
         
          <div class="item">
            <label for="eaddress">Email Address<span>*</span></label>
            <input id="eaddress" type="email"   name="eaddress" required/>
          </div>
          <div class="item">
            <label for="enroll">Enrollment Number<span>*</span></label>
            <input id="enroll" type="tel"   name="enroll" required/>
          </div>
          
        </div>
        <div class="question">
          <label>Include my contact information on lists distributed to other attendees.</label>
          <div class="question-answer">
            <div>
              <input type="radio" value="none" id="radio_1" name="info"/>
              <label for="radio_1" class="radio"><span>Yes</span></label>
            </div>
            <div>
              <input  type="radio" value="none" id="radio_2" name="info"/>
              <label for="radio_2" class="radio"><span>No</span></label>
            </div>
          </div>
        </div>
        <div class="item">
          <p>1)Does it reflect Engineering knowledge?</p>
          <select name="q1">
            <option selected value="choose" disabled selected></option>
            <option value="0" >Very Poor</option>
            <option value="1">Poor</option>
            <option value="2">Satisfactory</option>
            <option value="3">Good</option>
            <option value="4">Very Good</option>
            <option value="5">Excellent</option>
          </select>
        </div>
        <div class="item">
          <p>2)Does it provide insights for societal and engineering problems?</p>
          <select name="q2">
            <option selected value="choose" disabled selected></option>
            <option value="0" >Very Poor</option>
            <option value="1">Poor</option>
            <option value="2">Satisfactory</option>
            <option value="3">Good</option>
            <option value="4">Very Good</option>
            <option value="5">Excellent</option>
          </select>
        </div>
        
        <div class="item">
          <p>3)Have you experienced modern tools and its usage?</p>
          <select name="q3">
            <option selected value="choose" disabled selected></option>
            <option value="0" >Very Poor</option>
            <option value="1">Poor</option>
            <option value="2">Satisfactory</option>
            <option value="3">Good</option>
            <option value="4">Very Good</option>
            <option value="5">Excellent</option>
          </select>
        </div>
        <div class="item">
          <p>4)Does it convey the design and development of solution for complex problem?  </p>
          <select name="q4">
            <option selected value="choose" disabled selected></option>
            <option value="0" >Very Poor</option>
            <option value="1">Poor</option>
            <option value="2">Satisfactory</option>
            <option value="3">Good</option>
            <option value="4">Very Good</option>
            <option value="5">Excellent</option>
          </select>
        </div>
        <div class="item">
          <p>5)Did you gain knowledge about problem solution considering environment and sustainability? 
          </p>
          <select name="q5">
            <option selected value="choose" disabled selected></option>
            <option value="0" >Very Poor</option>
            <option value="1">Poor</option>
            <option value="2">Satisfactory</option>
            <option value="3">Good</option>
            <option value="4">Very Good</option>
            <option value="5">Excellent</option>
          </select>
        </div>
        <div class="item">
          <p>6)Did you observed or gain professional ethics during visit/session? * </p>
          <select name="q6">
            <option selected value="choose" disabled selected></option>
            <option value="0" >Very Poor</option>
            <option value="1">Poor</option>
            <option value="2">Satisfactory</option>
            <option value="3">Good</option>
            <option value="4">Very Good</option>
            <option value="5">Excellent</option>
          </select>
        </div>
        <div class="item">
          <p>7)Did you got the opportunity to work as an individual or team work during the visit/session?  </p>
          <select name="q7">
            <option selected value="choose" disabled selected></option>
            <option value="0" >Very Poor</option>
            <option value="1">Poor</option>
            <option value="2">Satisfactory</option>
            <option value="3">Good</option>
            <option value="4">Very Good</option>
            <option value="5">Excellent</option>
          </select>
        </div>
         *   
        <div class="item">
          <p>8) Did you gain the knowledge about project management and financial aspects for product development? </p>
          <select name="q8">
            <option selected value="choose" disabled selected></option>
            <option value="0" >Very Poor</option>
            <option value="1">Poor</option>
            <option value="2">Satisfactory</option>
            <option value="3">Good</option>
            <option value="4">Very Good</option>
            <option value="5">Excellent</option>
          </select>
        </div>
        <div class="btn-block">
          <button type="submit"  name="submit">Submit</button>
        </div>
      </form>
    </div>
  </body>
</html>