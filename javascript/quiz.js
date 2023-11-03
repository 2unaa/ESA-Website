var answerInputs = document.querySelectorAll(".answers-container input");

for(var i = 0; i < answerInputs.length; i++){
    // alert(qNum);
    let answers = answerInputs[i];
    
    answers.addEventListener("click",function(){
        var qNumString = answers.parentElement.parentElement.id;
        var qNum = parseInt(qNumString.charAt(qNumString.length-1)) +1;
        var questionId = "question" + qNum;
        var question = document.getElementById(questionId);
        question.style.display = "block";
    });
}
