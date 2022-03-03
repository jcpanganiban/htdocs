document.getElementById("checkout-btn").onclick = function () {
  document.getElementById("left-content").style.width = "100%";
  document.getElementById("lowerleft-content").style.width = "70%";
  document.getElementById("right-content").style.width = "0%";
  document.getElementById("right-content").style.display = "none";
  let price = document.getElementsByClassName("proPrice");
  console.log(price);
  for (var i = 0; i < price.length; i++) {
    price[i].textContent = "Purchased!";
    //display total price
    var totalPrice = 1;
    totalPrice += 1;
  }
  console.log(totalPrice);

  let time = document.getElementById("time").value;
  let date = document.getElementById("deliverydate").value;
  let content = document.querySelector(".right");
  let deltime = document.createElement("div");
  deltime.innerHTML =
    "Preparing your order!<br>Please Prepare " +
    totalPrice +
    "php and<br> pick up<br>" +
    date +
    " in " +
    time;
  deltime.classList.add("deltime");
  content.appendChild(deltime);

  let left = document.getElementById("left");
  left.style.width = "fit-content";

  // var scrnwdth2 = window.matchMedia("(min-width: 700px)");

  let widthMatch = window.matchMedia("(max-width: 700px)");
  if (widthMatch.matches) {
    document.getElementById("left-content").style.display = "inline-block";
    console.log("aaaa");
  }
  widthMatch.addEventListener("change", function (mm) {
    if (mm.matches) {
      document.getElementById("left-content").style.display = "inline-block";
      console.log("aaaa");
    }
  });
  // else {
  //   let widthMatch = window.matchMedia("(min-width: 1400px)");
  //   widthMatch.addEventListener("change", function (mm) {
  //     if (mm.matches) {
  //       left.style.width = "30%";
  //       console.log(mm);
  //     }
  //   });
  // }
  // });

  let arrow = document.getElementById("arrow");
  arrow.remove();
};
console.log("nagrun");

// select name="time" id="time">
//   <option value="15 minutes">15 Mins</option>
//   <option value="30 minutes">30 Mins</option>
//   <option value="45 minutes">45 Mins</option>
//   <option value="1 hour">1 Hour</option>
//   <option value="2 hours">2 Hour</option>
// </select>
// var day = document.getElementById("deliverydate");
// console.log(day);
// var target = document.getElementById("target").childNodes;
// console.log(target);
// if (day.value === "Today") {
//   let second = document.createElement("select");
//   second.setAttribute("id", "time");
//   second.setAttribute("name", "time");
//   let opt1 = document.createElement("option");
//   opt1.setAttribute("value", "15 minutes");
//   opt1.textContent = "15 minutes";
//   let opt2 = document.createElement("option");
//   opt2.setAttribute("value", "30 minutes");
//   opt1.textContent = "30 minutes";
//   let opt3 = document.createElement("option");
//   opt3.setAttribute("value", "45 minutes");
//   opt1.textContent = "45 minutes";
//   let opt4 = document.createElement("option");
//   opt4.setAttribute("value", "1 Hour");
//   opt4.textContent = "1 hour";
//   let opt5 = document.createElement("option");
//   opt5.setAttribute("value", "2 Hours");
//   opt5.textContent = "2 hours";
//   second.appendChild(opt1);
//   second.appendChild(opt2);
//   second.appendChild(opt3);
//   second.appendChild(opt4);
//   second.appendChild(opt5);
//   // day.inser
// } else if (day.value === "Tomorrow") {
//   let second = document.createElement("select");
//   second.setAttribute("id", "time");
//   second.setAttribute("name", "time");
//   let opt1 = document.createElement("option");
//   opt1.setAttribute("value", "9:00 AM");
//   opt1.textContent = "9:00 AM";
//   let opt2 = document.createElement("option");
//   opt2.setAttribute("value", "12:00 NN");
//   opt1.textContent = "12:00 NN";
//   let opt3 = document.createElement("option");
//   opt3.setAttribute("value", "3:00 PM");
//   opt1.textContent = "3:00 PM";
//   let opt4 = document.createElement("option");
//   opt4.setAttribute("value", "6:00 PM");
//   opt4.textContent = "6:00 PM";
//   let opt5 = document.createElement("option");
//   opt5.setAttribute("value", "9:00 PM");
//   opt5.textContent = "9:00 PM";
//   second.appendChild(opt1);
//   second.appendChild(opt2);
//   second.appendChild(opt3);
//   second.appendChild(opt4);
//   second.appendChild(opt5);
// }
