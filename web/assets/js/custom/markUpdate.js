$(document).ready(function(){
	var cells = document.getElementsByClassName("markCell"),
        i,
        count = cells.length,
        markCleaning = function (p_mark){
            return Number(p_mark);
        },
        cellsblurListener = function (e){
            var idCourse = e.target.dataset.courseId,
                idMark = e.target.dataset.markId,
                grade = markCleaning(e.target.innerHTML),
                grade_before = e.target.dataset.originalMark;

	            if(grade !== grade_before){
					$.ajax({
						method:"GET",
						url: URL + '/evaluator_ajax_updatePartial',
						data: {'idCourse':idCourse, 'markId':idMark, 'grade':grade, 'gradeBefore':grade_before},
						success: function (response){
							console.log(response);
						}
					});
				};
                
            };
            
            for (i = 0; i < count; i++) {
       			cells[i].addEventListener("blur", cellsblurListener, false);
			}
});
