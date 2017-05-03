$(document).ready(function(){
	var cells = document.getElementsByClassName("markCell"),
        i,
        count = cells.length,
        markCleaning = function (p_mark){
            return Number(p_mark);
        },
        cellsBlurListener = function (e){
            var idMark = e.target.dataset.markId,
                grade = markCleaning(e.target.innerHTML),
                grade_before = e.target.dataset.originalMark;
	            if(grade !== grade_before){
					$.ajax({
						type:"POST",
						url: window.URL+'/ajax/updatePartial',
						data: {"idMark":idMark, "grade":grade},
						success: function (response){
							console.log(response);
						}
					});
				};
            };

    for (i = 0; i < count; i++) {
    	cells[i].addEventListener("blur", cellsBlurListener, false);
	}
});
