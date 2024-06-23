function submitProjectDetails() {
    var ProjectName = document.getElementById("PName")
    var pAssigned = document.getElementById("projectAssigned")
    var sDate = document.getElementById("SDate")
    var eDate = document.getElementById("EDate")
    var Prior = document.querySelector('input[name="priority"]')
    var Description = document.getElementById("description")
 // project name validation
    if (ProjectName.value == "") {
        alert("Project name field cannot be empty");
    } else {
        alert(ProjectName.value);
    }
    // Assigned to validation
    var person = pAssigned.options[pAssigned.selectedIndex].value;
    if (person == "" || person=="Select") {
        alert("Project Assigned to field cannot be empty");
    } else {
        alert(pAssigned.options[pAssigned.selectedIndex].value);
    }
  // Date validation
    // start date
    if (sDate.value == "") {
        alert(" Please Enter the Starting date");
    } else {
        alert(document.getElementById("SDate").value);
    }
    // End date
    if (eDate.value == 0) {
        alert("Please enter the end date ");
    } else {
        alert(document.getElementById("EDate").value);
    }
   //priority validation
    var Prior = document.querySelector('input[name="priority"]:checked');

    if (Prior != null) {
        alert("The priority of project is:" + Prior.value);

    } else {
        alert("You did not select the priority of the project");
    }
// description validation

    if (Description.value == "") {
        alert("You did not write the project description");
    } else {
        alert(document.getElementById("description").value);
    }
}
function resetProjectDetails() {
    document.getElementById("PName").value = '';
    document.getElementById("projectAssigned").value = 'Select';
    document.getElementById("SDate").value = '';
    document.getElementById("EDate").value = '';
    document.querySelector('input[name="priority"]').value = '';
    document.getElementById("description").value = '';
}