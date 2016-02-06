/**
 * Created by Stephen on 2/5/2016.
 */
function submitAnswers(){
    // Total number of questions
    var total = 5;
    var score = 0;

    // Get the users input
    var q1 = document.forms["quiz_form"]["q1"].value;
    var q2 = document.forms["quiz_form"]["q2"].value;
    var q3 = document.forms["quiz_form"]["q3"].value;
    var q4 = document.forms["quiz_form"]["q4"].value;
    var q5 = document.forms["quiz_form"]["q5"].value;

    // Validation
    for (var i=1; i<= total; i++){

        if(eval('q' + i) == null || eval('q' + i) == ''){
            alert('Please make a selection for Question ' + i);
            return false;
        }

    }

    // Set the correct answers
    var answers = ["b","a","d","b","d"];

    // Check the answers
    for (var i=1; i<= total; i++){

        if(eval('q' + i) == answers[i-1]){
            score++;
        }

    }


    // Display results
    var results = document.getElementById('results');
    alert("You scored " + score + " out of " + total);
    results.innerHTML = "<h3>You scored <span>" + score + " out of " + total + "</span></h3>";

    return false;
}