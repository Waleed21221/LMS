	
// function openLeftPanel() {
// 	document.getElementById("left-sidebar-panel").style.width = "100%";
//   }
  
//   function closeLeftPanel() {
// 	document.getElementById("left-sidebar-panel").style.width = "0";
//   }
  
//   function openRightPanel() {
// 	document.getElementById("right-sidebar-panel").style.width = "100%";
//   }
  
//   function closeRightPanel() {
// 	document.getElementById("right-sidebar-panel").style.width = "0";
//   }
  
function openLeftPanel() {
	document.getElementById("left-sidebar-panel").style.width = "100%";
  }
  
  function closeLeftPanel() {
	document.getElementById("left-sidebar-panel").style.width = "0";
  }
  
  function openRightPanel() {
	document.getElementById("right-sidebar-panel").style.width = "100%";
  }
  
  function closeRightPanel() {
	document.getElementById("right-sidebar-panel").style.width = "0";
  }
  
  function rightPanelFirstCheckbox() {
	  var rightBarCheckbox1 = document.getElementById("c1");
	  var rightBarLabel1 = document.getElementById("label1");
  
	  if (rightBarCheckbox1.checked == true) {
		  rightBarLabel1.style.textDecoration = "line-through";
	  } else {
		  rightBarLabel1.style.textDecoration = "none";
	  }
  }
  
  function rightPanelSecondCheckbox() {
	  var rightBarCheckbox2 = document.getElementById("c2");
	  var rightBarLabel2 = document.getElementById("label2");
  
	  if (rightBarCheckbox2.checked == true) {
		  rightBarLabel2.style.textDecoration = "line-through";
	  } else {
		  rightBarLabel2.style.textDecoration = "none";
	  }
  }
  
  function rightPanelThirdCheckbox() {
	  var rightBarCheckbox3 = document.getElementById("c3");
	  var rightBarLabel3 = document.getElementById("label3");
  
	  if (rightBarCheckbox3.checked == true) {
		  rightBarLabel3.style.textDecoration = "line-through";
	  } else {
		  rightBarLabel3.style.textDecoration = "none";
	  }
  }
  
  function rightPanelFourthCheckbox() {
	  var rightBarCheckbox4 = document.getElementById("c4");
	  var rightBarLabel4 = document.getElementById("label4");
  
	  if (rightBarCheckbox4.checked == true) {
		  rightBarLabel4.style.textDecoration = "line-through";
	  } else {
		  rightBarLabel4.style.textDecoration = "none";
	  }
  }
  
  function expandWorkDiscussionBox() {
	  var workDiscussionBoxArrow = document.getElementById("work-discussion-expand-box-arrow");
	  var workDiscussionBox = document.getElementById("work-discussion-expand-box");
  
	  if (workDiscussionBoxArrow.style.height === "80px") {
		  workDiscussionBox.style.height = "auto";
	  } else {
		  workDiscussionBox.style.height = "80px"
	  }
  }