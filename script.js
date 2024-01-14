const newTaskBtn = document.getElementById("addTask");
const toDoList = document.getElementById("list");
const addNewTaskForm = document.getElementById('addNewTaskForm');

newTaskBtn.onselectstart = function(){return false;};

newTaskBtn.addEventListener("click", addNewTask);

function addNewTask(){
   if (toDoList.style.display === "none") {

      toDoList.style.display = "flex";
      addNewTaskForm.style.display = "none";
   }else{
      toDoList.style.display = "none";
      addNewTaskForm.style.display = "flex";
   }
}