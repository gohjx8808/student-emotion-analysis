<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <style>
        .form-background {
            padding: 50px;
            background-color: midnightblue;
            width: 85%;
            margin: auto;
            margin-top: 25px;
            margin-bottom: 25px;
            position: relative;
            border-radius: 10px;
        }

        .background {
            background-image: url('/images/wooden_bg.jfif');
            background-size: cover;
        }

        .white-label {
            color: white;
        }

        .radio-center {
            border-bottom-width: 0;
            border-radius: 0px;
        }
    </style>
</head>

<body class="background">
    <form class="form-background" action="personaldetail/post" method="POST">
        {{ csrf_field() }}
        <h1 class="white-label">Student Emotion Analysis</h1>
        <br />
        <h4 class="white-label">Part 1: Personal Detail</h4>
        <hr style="background-color: white" />
        {{-- <div class="form-group">
            <label for="matrics_num" class="white-label">New Matrics Number</label>
            <input type="text" class="form-control" id="matrics_num" name="matrics_num"
                placeholder="Please enter your new matrics number" required />
        </div> --}}
        {{-- <div class="form-group">
            <label for="course" class="white-label">Course taking</label>
            <div class="form-control" style="border-bottom-width: 0;border-radius: 10px 10px 0px 0px;">
                <label class="form-check-label" for="WIX1002">
                    <input class="form-control-input" type="radio" id="WIX1002" name="course" value="WIX1002"
                        required />
                    WIX1002
                </label>
            </div>
            <div class="form-control radio-center">
                <label class="form-check-label" for="WID2003">
                    <input class="form-control-input" type="radio" id="WID2003" name="course" value="WID2003"
                        required />
                    WID2003
                </label>
            </div>
            <div class="input-group radio-center radio-center">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <label class="form-check-label" for="other_course">
                            <input class="form-control-input" type="radio" id="other_course" name="course"
                                value="other_course" />
                            Other:
                        </label>
                    </div>
                </div>
                <input type="text" class="form-control" id="other_course" name="other_course" disabled
                    placeholder="Please enter your course code" />
            </div>
        </div> --}}
        <div class="form-group">
            <label for="gender" class="white-label">Gender</label>
            <div class="form-control" style="border-bottom-width: 0;border-radius: 10px 10px 0px 0px;">
                <label class="form-check-label" for="male">
                    <input class="form-control-input" type="radio" id="male" name="gender" value="male" required />
                    Male
                </label>
            </div>
            <div class="form-control" style="border-top-width: 0;border-radius: 0px 0px 10px 10px;">
                <label class="form-check-label" for="female">
                    <input class="form-control-input" type="radio" id="female" name="gender" value="female" />
                    Female
                </label>
            </div>
        </div>
        <div class="form-group">
            <label for="age" class="white-label">Age</label>
            <input type="number" class="form-control" id="age" name="age" placeholder="Please enter your age"
                required />
        </div>
        <div class="form-group">
            <label for="nationality" class="white-label">Nationality</label>
            <div class="form-control" style="border-bottom-width: 0;border-radius: 10px 10px 0px 0px;">
                <label class="form-check-label" for="malaysian">
                    <input class="form-control-input" type="radio" id="malaysian" name="nationality" value="malaysian"
                        required />
                    Malaysian
                </label>
            </div>
            <div class="input-group radio-center radio-center">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <label class="form-check-label" for="international">
                            <input class="form-control-input" type="radio" id="international" name="nationality"
                                value="international" />
                            International:
                        </label>
                    </div>
                </div>
                <input type="text" class="form-control" id="international" name="international" disabled
                    placeholder="Please enter your nationality" />
            </div>
        </div>
        <div class="form-group">
            <label for="race" class="white-label">Race</label>
            <div class="form-control" style="border-bottom-width: 0;border-radius: 10px 10px 0px 0px;">
                <label class="form-check-label" for="malays">
                    <input class="form-control-input" type="radio" id="malays" name="race" value="malays" required />
                    Malays
                </label>
            </div>
            <div class="form-control radio-center">
                <label class="form-check-label" for="chinese">
                    <input class="form-control-input" type="radio" id="chinese" name="race" value="chinese" />
                    Chinese
                </label>
            </div>
            <div class="form-control radio-center">
                <label class="form-check-label" for="indian">
                    <input class="form-control-input" type="radio" id="indian" name="race" value="indian" />
                    Indian
                </label>
            </div>
            <div class="input-group radio-center radio-center">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <label class="form-check-label" for="others-race">
                            <input class="form-control-input" type="radio" id="others-race" name="race"
                                value="others-race" />
                            Others:
                        </label>
                    </div>
                </div>
                <input type="text" class="form-control" id="others-race" name="others-race" disabled />
            </div>
        </div>
        <div class="form-group">
            <label for="major" class="white-label">Major</label>
            <select class="form-control" id="major" name="major" required>
            </select>
        </div>
        <div class="form-group">
            <label for="year" class="white-label">Year of study</label>
            <div class="form-control" style="border-bottom-width: 0;border-radius: 10px 10px 0px 0px;">
                <label class="form-check-label" for="1st">
                    <input class="form-control-input" type="radio" id="1st" name="year_study" value="1st-year"
                        required />
                    1st year
                </label>
            </div>
            <div class="form-control radio-center">
                <label class="form-check-label" for="2nd">
                    <input class="form-control-input" type="radio" id="2nd" name="year_study" value="2nd-year" />
                    2nd year
                </label>
            </div>
            <div class="form-control radio-center">
                <label class="form-check-label" for="3rd">
                    <input class="form-control-input" type="radio" id="3rd" name="year_study" value="3rd-year" />
                    3rd year
                </label>
            </div>
            <div class="form-control" style="border-top-width: 0;border-radius: 0px 0px 10px 10px;">
                <label class="form-check-label" for="final">
                    <input class="form-control-input" type="radio" id="final" name="year_study" value="final-year" />
                    Final year
                </label>
            </div>
        </div>
        <div class="form-group">
            <label for="duration" class="white-label">Years of experience in computer programming</label>
            <div class="form-control" style="border-bottom-width: 0;border-radius: 10px 10px 0px 0px;">
                <label class="form-check-label" for="less-1year">
                    <input required class="form-control-input" type="radio" id="less-1year" name="programming_duration"
                        value="less_than_1_year" />
                    1 year or less
                </label>
            </div>
            <div class="form-control radio-center">
                <label class="form-check-label" for="2year">
                    <input class="form-control-input" type="radio" id="2year" name="programming_duration"
                        value="2year" />
                    2 years
                </label>
            </div>
            <div class="form-control radio-center">
                <label class="form-check-label" for="3year">
                    <input class="form-control-input" type="radio" id="3year" name="programming_duration"
                        value="3year" />
                    3 years
                </label>
            </div>
            <div class="form-control" style="border-top-width: 0;border-radius: 0px 0px 10px 10px;">
                <label class="form-check-label" for="more 3year">
                    <input class="form-control-input" type="radio" id="more 3year" name="programming_duration"
                        value="more_than_3_year" />
                    More than 3 years
                </label>
            </div>
        </div>
        <div class="form-group">
            <label for="FOPgrade" class="white-label">Grade for Fundamental of Programming (FOP)</label>
            <select class="form-control" id="FOPgrade" name="FOPgrade" required></select>
        </div>
        <div class="form-group">
            <label for="firstLanguage" class="white-label">What language did you first learn to program?
            </label>
            <div class="form-control" style="border-bottom-width: 0;border-radius: 10px 10px 0px 0px;">
                <label class="form-check-label" for="Java">
                    <input required class="form-control-input" type="radio" id="Java" name="firstLanguage"
                        value="Java" />
                    Java
                </label>
            </div>
            <div class="form-control radio-center">
                <label class="form-check-label" for="C">
                    <input class="form-control-input" type="radio" id="C" name="firstLanguage" value="C" />
                    C
                </label>
            </div>
            <div class="form-control radio-center">
                <label class="form-check-label" for="C++">
                    <input class="form-control-input" type="radio" id="C++" name="firstLanguage" value="C++" />
                    C++
                </label>
            </div>
            <div class="form-control radio-center">
                <label class="form-check-label" for="Python">
                    <input class="form-control-input" type="radio" id="Python" name="firstLanguage" value="Python" />
                    Python
                </label>
            </div>
            <div class="form-control radio-center">
                <label class="form-check-label" for="Javascript">
                    <input class="form-control-input" type="radio" id="Javascript" name="firstLanguage"
                        value="Javascript" />
                    Javascript
                </label>
            </div>
            <div class="form-control radio-center">
                <label class="form-check-label" for="PHP">
                    <input class="form-control-input" type="radio" id="PHP" name="firstLanguage" value="PHP" />
                    PHP
                </label>
            </div>
            <div class="input-group radio-center radio-center">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <label class="form-check-label" for="others-language">
                            <input class="form-control-input" type="radio" id="others-language" name="firstLanguage"
                                value="others-language" />
                            Others:
                        </label>
                    </div>
                </div>
                <input type="text" class="form-control" id="others-languages" name="others-languages" disabled />
            </div>
        </div>
        <div class="form-group">
            <label for="programmingRate" class="white-label">How would you rate your overall programming
                expertise?</label>
            <div class="form-control" style="border-bottom-width: 0;border-radius: 10px 10px 0px 0px;">
                <label class="form-check-label" for="novice">
                    <input required class="form-control-input" type="radio" id="novice" name="programmingRate"
                        value="novice" />
                    Novice
                </label>
            </div>
            <div class="form-control radio-center">
                <label class="form-check-label" for="intermediate">
                    <input class="form-control-input" type="radio" id="intermediate" name="programmingRate"
                        value="intermediate" />
                    Intermediate
                </label>
            </div>
            <div class="form-control" style="border-top-width: 0;border-radius: 0px 0px 10px 10px;">
                <label class="form-check-label" for="expert">
                    <input class="form-control-input" type="radio" id="expert" name="programmingRate" value="expert" />
                    Expert
                </label>
            </div>
        </div>
        <div class="form-group">
            <label for="languageAmount" class="white-label">How many programming languages have you learned?</label>
            <div class="form-control" style="border-bottom-width: 0;border-radius: 10px 10px 0px 0px;">
                <label class="form-check-label" for="1language">
                    <input required class="form-control-input" type="radio" id="1language" name="languageAmount"
                        value="1language" />
                    1
                </label>
            </div>
            <div class="form-control radio-center">
                <label class="form-check-label" for="2language">
                    <input class="form-control-input" type="radio" id="2language" name="languageAmount"
                        value="2language" />
                    2
                </label>
            </div>
            <div class="form-control radio-center">
                <label class="form-check-label" for="3language">
                    <input class="form-control-input" type="radio" id="3language" name="languageAmount"
                        value="3language" />
                    3
                </label>
            </div>
            <div class="form-control" style="border-top-width: 0;border-radius: 0px 0px 10px 10px;">
                <label class="form-check-label" for="more-3language">
                    <input class="form-control-input" type="radio" id="more-3language" name="languageAmount"
                        value="more_than_3_language" />
                    More than 3
                </label>
            </div>
        </div>
        <div class="form-group">
            <label class="white-label">Please rate from your perspective the following statements about learning a
                programming language.</label>
            <table class="table table-hover" style="background-color: white; border-radius:5px">
                <thead>
                    <tr>
                        <th scope="col">Item</th>
                        <th scope="col">Questions</th>
                        <th scope="col" style="text-align: center">Strongly Disagree</th>
                        <th scope="col" style="text-align: center">Disagree</th>
                        <th scope="col" style="text-align: center">Neutral</th>
                        <th scope="col" style="text-align: center">Agree</th>
                        <th scope="col" style="text-align: center">Strongly Agree</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>It is too difficult to remember the syntax</td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="P1-difficultSyntax" value="1"
                                required />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="P1-difficultSyntax" value="2" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="P1-difficultSyntax" value="3" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="P1-difficultSyntax" value="4" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="P1-difficultSyntax" value="5" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>I do not understand the logic of the programming.</td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="P2-noLogic" value="1" required />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="P2-noLogic" value="2" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="P2-noLogic" value="3" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="P2-noLogic" value="4" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="P2-noLogic" value="5" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>The materials for learning do not provide suitable examples.</td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="P3-noExample" value="1" required />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="P3-noExample" value="2" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="P3-noExample" value="3" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="P3-noExample" value="4" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="P3-noExample" value="5" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>It requires certain skills that I do not have.</td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="P4-noSkill" value="1" required />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="P4-noSkill" value="2" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="P4-noSkill" value="3" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="P4-noSkill" value="4" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="P4-noSkill" value="5" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>It is not enough interesting, exciting, or provoking for me.</td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="P5-notInteresting" value="1"
                                required />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="P5-notInteresting" value="2" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="P5-notInteresting" value="3" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="P5-notInteresting" value="4" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="P5-notInteresting" value="5" />
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="form-group">
            <label class="white-label">How do you generally feel while programming?</label>
            <table class="table table-hover" style="background-color: white; border-radius:5px">
                <thead>
                    <tr>
                        <th scope="col">Item</th>
                        <th scope="col">Questions</th>
                        <th scope="col" style="text-align: center">Never</th>
                        <th scope="col" style="text-align: center">Rarely</th>
                        <th scope="col" style="text-align: center">Sometimes</th>
                        <th scope="col" style="text-align: center">Most of the time</th>
                        <th scope="col" style="text-align: center">Always</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Bored</td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F1-bored" value="1" required />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F1-bored" value="2" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F1-bored" value="3" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F1-bored" value="4" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F1-bored" value="5" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Happy</td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F2-happy" value="1" required />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F2-happy" value="2" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F2-happy" value="3" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F2-happy" value="4" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F2-happy" value="5" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Frustrated</td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F3-frustrated" value="1" required />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F3-frustrated" value="2" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F3-frustrated" value="3" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F3-frustrated" value="4" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F3-frustrated" value="5" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Relaxed</td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F4-relaxed" value="1" required />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F4-relaxed" value="2" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F4-relaxed" value="3" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F4-relaxed" value="4" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F4-relaxed" value="5" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Enthusiastic</td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F5-enthusiastic" value="1" required />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F5-enthusiastic" value="2" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F5-enthusiastic" value="3" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F5-enthusiastic" value="4" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F5-enthusiastic" value="5" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>Idle</td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F6-idle" value="1" required />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F6-idle" value="2" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F6-idle" value="3" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F6-idle" value="4" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F6-idle" value="5" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">7</th>
                        <td>Excited</td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F7-excited" value="1" required />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F7-excited" value="2" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F7-excited" value="3" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F7-excited" value="4" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F7-excited" value="5" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">8</th>
                        <td>Dissatisfied</td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F8-dissatisfied" value="1" required />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F8-dissatisfied" value="2" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F8-dissatisfied" value="3" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F8-dissatisfied" value="4" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F8-dissatisfied" value="5" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">9</th>
                        <td>Motivated</td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F9-motivated" value="1" required />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F9-motivated" value="2" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F9-motivated" value="3" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F9-motivated" value="4" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F9-motivated" value="5" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">10</th>
                        <td>Focused</td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F10-focused" value="1" required />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F10-focused" value="2" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F10-focused" value="3" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F10-focused" value="4" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F10-focused" value="5" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">11</th>
                        <td>Stressful</td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F11-stressful" value="1" required />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F11-stressful" value="2" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F11-stressful" value="3" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F11-stressful" value="4" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="F11-stressful" value="5" />
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="form-group">
            <label class="white-label">How do you generally approach a programming task? Please rate the following
                statements.</label>
            <table class="table table-hover" style="background-color: white; border-radius:5px">
                <thead>
                    <tr>
                        <th scope="col">Item</th>
                        <th scope="col">Questions</th>
                        <th scope="col" style="text-align: center">Strongly Disagree</th>
                        <th scope="col" style="text-align: center">Disagree</th>
                        <th scope="col" style="text-align: center">Neutral</th>
                        <th scope="col" style="text-align: center">Agree</th>
                        <th scope="col" style="text-align: center">Strongly Agree</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>I usually use tutorials and examples.</td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A1-tutorial" value="1" required />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A1-tutorial" value="2" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A1-tutorial" value="3" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A1-tutorial" value="4" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A1-tutorial" value="5" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>I focus on the coding with all my attention.</td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A2-fullAttention" value="1" required />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A2-fullAttention" value="2" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A2-fullAttention" value="3" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A2-fullAttention" value="4" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A2-fullAttention" value="5" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>I like to finish my coding task as soon as possible.</td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A3-ASAP" value="1" required />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A3-ASAP" value="2" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A3-ASAP" value="3" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A3-ASAP" value="4" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A3-ASAP" value="5" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>I get distracted easily by other stimuli.</td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A4-distractedEasily" value="1"
                                required />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A4-distractedEasily" value="2" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A4-distractedEasily" value="3" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A4-distractedEasily" value="4" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A4-distractedEasily" value="5" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>I am usually interested and curious about the coding I am writing.</td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A5-curious" value="1" required />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A5-curious" value="2" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A5-curious" value="3" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A5-curious" value="4" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A5-curious" value="5" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>I usually lose the notion of time when coding.</td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A6-veryFocus" value="1" required />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A6-veryFocus" value="2" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A6-veryFocus" value="3" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A6-veryFocus" value="4" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A6-veryFocus" value="5" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">7</th>
                        <td>I like to code challenging problems.</td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A7-likeChallenging" value="1"
                                required />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A7-likeChallenging" value="2" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A7-likeChallenging" value="3" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A7-likeChallenging" value="4" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A7-likeChallenging" value="5" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">8</th>
                        <td>I am not sure whether my code is producing the right result.</td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A8-doubt" value="1" required />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A8-doubt" value="2" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A8-doubt" value="3" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A8-doubt" value="4" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A8-doubt" value="5" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">9</th>
                        <td>I like to learn and try new things when coding.</td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A9-learnNewThings" value="1"
                                required />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A9-learnNewThings" value="2" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A9-learnNewThings" value="3" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A9-learnNewThings" value="4" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A9-learnNewThings" value="5" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">10</th>
                        <td>I finish the coding when I have given all my best.</td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A10-giveTheBest" value="1" required />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A10-giveTheBest" value="2" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A10-giveTheBest" value="3" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A10-giveTheBest" value="4" />
                        </td>
                        <td style="text-align: center">
                            <input class="form-control-input" type="radio" name="A10-giveTheBest" value="5" />
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div style="text-align: center;">
            <button type="submit" class="btn btn-primary" style="width:15%" id='submit'>
                Continue to Guide
            </button>
        </div>
    </form>
    <script>
        var majors = [
                { name: "Artificial Intelligence", value: "AI" },
                { name: "Software Engineering", value: "SE" },
                { name: "Computer System and Network", value: "NET" },
                { name: "Mutimedia", value: "MUL" },
                { name: "Information Systems", value: "IS" },
                { name: "Data Science", value: "DS" }
            ];

            var grades = [
                { name: "A+", value: "A+" },
                { name: "A", value: "A" },
                { name: "A-", value: "A-" },
                { name: "B+", value: "B+" },
                { name: "B", value: "B" },
                { name: "B-", value: "B-" },
                { name: "C+", value: "C+" },
                { name: "C", value: "C" },
                { name: "D", value: "D" },
                { name: "D-", value: "D-" },
                { name: "E", value: "E" },
                { name: "F", value: "F" }
            ];

            $(document).ready(function() {

                $("input[name=course]").on("change", function() {
                    var race = $(this).val();
                    if (race == "other_course") {
                        $("input[name=other_course]").removeAttr("disabled");
                    } else {
                        $("input[name=other_course]").attr("disabled", true);
                    }
                });

                $("input[name=nationality]").on("change", function() {
                    var race = $(this).val();
                    if (race == "international") {
                        $("input[name=international]").removeAttr("disabled");
                    } else {
                        $("input[name=international]").attr("disabled", true);
                    }
                });

                $("input[name=race]").on("change", function() {
                    var race = $(this).val();
                    if (race == "others-race") {
                        $("input[name=others-race]").removeAttr("disabled");
                    } else {
                        $("input[name=others-race]").attr("disabled", true);
                    }
                });

                $("input[name=firstLanguage]").on("change", function() {
                    var language = $(this).val();
                    if (language == "others-language") {
                        $("input[name=others-languages]").removeAttr(
                            "disabled"
                        );
                    } else {
                        $("input[name=others-languages]").attr(
                            "disabled",
                            true
                        );
                    }
                });

                let majorSelect = $("#major");
                majorSelect.append(
                    '<option selected="true" value="" disabled>Please select your major</option>'
                );
                $.each(majors, function(key, major) {
                    majorSelect.append(
                        $("<option></option>")
                            .attr("value", major.value)
                            .text(major.name)
                    );
                });

                let gradeDropdown = $("#FOPgrade");
                gradeDropdown.append(
                    '<option selected="true" value="" disabled>Please select your grade</option>'
                );
                $.each(grades, function(key, grade) {
                    gradeDropdown.append(
                        $("<option></option>")
                            .attr("value", grade.value)
                            .text(grade.name)
                    );
                });
            });
    </script>
</body>

</html>
