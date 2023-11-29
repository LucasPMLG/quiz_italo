function submitAnswers() {
    var answers = {
        q1: document.querySelector('input[name="q1"]:checked'),
        q2: document.querySelector('input[name="q2"]:checked'),
        q3: document.querySelector('input[name="q3"]:checked'),
        q4: document.querySelector('input[name="q4"]:checked'),
        q5: document.querySelector('input[name="q5"]:checked'),
        q6: document.querySelector('input[name="q6"]:checked'),
        q7: document.querySelector('input[name="q7"]:checked'),
        q8: document.querySelector('input[name="q8"]:checked'),
        q9: document.querySelector('input[name="q9"]:checked'),
        q10: document.querySelector('input[name="q10"]:checked')
    }

    // Verifica se todas as perguntas foram respondidas
    for (var key in answers) {
        if (answers[key] === null || answers[key] === undefined) {
            alert("Por favor, responda todas as perguntas antes de enviar.")
            return
        }
    }
    window.location.href = "congratulations.html"
}