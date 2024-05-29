document.addEventListener('DOMContentLoaded', function() {
  var questions = document.querySelectorAll('.question');

  questions.forEach(function(question) {
    question.addEventListener('click', function() {
      var answer = this.querySelector('.answer');
      if (answer.style.display === 'block' || getComputedStyle(answer).display === 'block') {
        answer.style.display = 'none';
      } else {
        answer.style.display = 'block';
      }
    });
  });
});