var checkAll = document.getElementById("checkAll");
checkAll &&
	(checkAll.onclick = function () {
		for (
			var e = document.querySelectorAll(
					'.form-check-all input[type="checkbox"]'
				),
				t = 0;
			t < e.length;
			t++
		)
			(e[t].checked = this.checked),
				e[t].checked
					? e[t].closest("tr").classList.add("table-active")
					: e[t].closest("tr").classList.remove("table-active");
	});
var perPage = 8,
	options = {
		valueNames: [
			"id",
			"project_name",
			"tasks_name",
			"client_name",
			"assignedto",
			"due_date",
			"status",
			"priority",
		],
		page: perPage,
		pagination: !0,
		plugins: [ListPagination({ left: 2, right: 2 })],
	},
	tasksList = new List("tasksList", options).on("updated", function (e) {
		0 == e.matchingItems.length
			? (document.getElementsByClassName("noresult")[0].style.display = "block")
			: (document.getElementsByClassName("noresult")[0].style.display = "none");
		var t = 1 == e.i,
			a = e.i > e.matchingItems.length - e.page;
		document.querySelector(".pagination-prev.disabled") &&
			document
				.querySelector(".pagination-prev.disabled")
				.classList.remove("disabled"),
			document.querySelector(".pagination-next.disabled") &&
				document
					.querySelector(".pagination-next.disabled")
					.classList.remove("disabled"),
			t && document.querySelector(".pagination-prev").classList.add("disabled"),
			a && document.querySelector(".pagination-next").classList.add("disabled"),
			e.matchingItems.length <= perPage
				? (document.querySelector(".pagination-wrap").style.display = "none")
				: (document.querySelector(".pagination-wrap").style.display = "flex"),
			e.matchingItems.length == perPage &&
				document
					.querySelector(".pagination.listjs-pagination")
					.firstElementChild.children[0].click(),
			0 < e.matchingItems.length
				? (document.getElementsByClassName("noresult")[0].style.display =
						"none")
				: (document.getElementsByClassName("noresult")[0].style.display =
						"block");
	});
const xhttp = new XMLHttpRequest();
(xhttp.onload = function () {
	JSON.parse(this.responseText).forEach(function (e) {
		var t = '<div class="avatar-group">';
		e.assignedto.forEach(function (e) {
			t += `
                <a href="javascript: void(0);" class="avatar-group-item" data-img="${e}" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Username">
                    <img src="${baseURL}public/assets/images/users/${e}" alt="" class="rounded-circle avatar-xxs" />
                </a>
            `;
		}),
			(t += "</div>"),
			tasksList.add({
				id:
					'<a href="apps-tasks-details.html" class="fw-medium link-primary">#VLZ' +
					e.id +
					"</a>",
				project_name:
					'<a href="apps-projects-overview.html" class="fw-medium link-primary">' +
					e.project_name +
					"</a>",
				tasks_name: e.tasks_name,
				client_name: e.client_name,
				assignedto: t,
				due_date: e.due_date,
				status: isStatus(e.status),
				priority: isPriority(e.priority),
			}),
			tasksList.sort("id", { order: "desc" }),
			refreshCallbacks();
	}),
		tasksList.remove(
			"id",
			'<a href="apps-tasks-details.html" class="fw-medium link-primary">#VLZ501</a>'
		);
}),
	xhttp.open("GET", `${baseURL}public/assets/json/tasks-list.json`),
	xhttp.send(),
	(isCount = new DOMParser().parseFromString(
		tasksList.items.slice(-1)[0]._values.id,
		"text/html"
	));
var isValue = isCount.body.firstElementChild.innerHTML,
	idField = document.getElementById("tasksId"),
	projectNameField = document.getElementById("projectName-field"),
	tasksTitleField = document.getElementById("tasksTitle-field"),
	clientNameField = document.getElementById("clientName-field"),
	assignedtoNameField = "Demo Assign",
	dateDueField = document.getElementById("duedate-field"),
	priorityField = document.getElementById("priority-field"),
	statusField = document.getElementById("ticket-status"),
	addBtn = document.getElementById("add-btn"),
	editBtn = document.getElementById("edit-btn"),
	removeBtns = document.getElementsByClassName("remove-item-btn"),
	editBtns = document.getElementsByClassName("edit-item-btn");
function filterOrder(e) {
	var t = e;
	tasksList.filter(function (e) {
		matchData = new DOMParser().parseFromString(e.values().status, "text/html");
		e = matchData.body.firstElementChild.innerHTML;
		return "All" == e || "All" == t || e == t;
	}),
		tasksList.update();
}
function updateList() {
	var t = document.querySelector("input[name=status]:checked").value;
	(data = userList.filter(function (e) {
		return "All" == t || e.values().sts == t;
	})),
		userList.update();
}
refreshCallbacks(),
	document
		.getElementById("showModal")
		.addEventListener("show.bs.modal", function (e) {
			e.relatedTarget.classList.contains("edit-item-btn")
				? ((document.getElementById("exampleModalLabel").innerHTML =
						"Edit Task"),
				  (document
						.getElementById("showModal")
						.querySelector(".modal-footer").style.display = "block"),
				  (document.getElementById("add-btn").style.display = "none"),
				  (document.getElementById("edit-btn").style.display = "block"))
				: e.relatedTarget.classList.contains("add-btn")
				? ((document.getElementById("exampleModalLabel").innerHTML =
						"Add Task"),
				  (document
						.getElementById("showModal")
						.querySelector(".modal-footer").style.display = "block"),
				  (document.getElementById("edit-btn").style.display = "none"),
				  (document.getElementById("add-btn").style.display = "block"))
				: ((document.getElementById("exampleModalLabel").innerHTML =
						"List Task"),
				  (document
						.getElementById("showModal")
						.querySelector(".modal-footer").style.display = "none"));
		}),
	document
		.getElementById("showModal")
		.addEventListener("hidden.bs.modal", function () {
			clearFields();
		}),
	document.querySelector("#tasksList").addEventListener("click", function () {
		refreshCallbacks(), ischeckboxcheck();
	});
var table = document.getElementById("tasksTable"),
	tr = table.getElementsByTagName("tr"),
	trlist = table.querySelectorAll(".list tr"),
	count = 11;
addBtn.addEventListener("click", function (e) {
	e.preventDefault(),
		"" !== projectNameField.value &&
			"" !== tasksTitleField.value &&
			"" !== clientNameField.value &&
			"" !== dateDueField.value &&
			"" !== priorityField.value &&
			"" !== statusField.value &&
			(tasksList.add({
				id:
					'<a href="apps-tasks-details.html" class="fw-medium link-primary">#VLZ' +
					count +
					"</a>",
				project_name:
					'<a href="apps-projects-overview.html" class="fw-medium link-primary">' +
					projectNameField.value +
					"</a>",
				tasks_name: tasksTitleField.value,
				client_name: clientNameField.value,
				assignedto: assignToUsers(),
				due_date: fomateDate(dateDueField.value),
				status: isStatus(statusField.value),
				priority: isPriority(priorityField.value),
			}),
			tasksList.sort("id", { order: "desc" }),
			document.getElementById("close-modal").click(),
			clearFields(),
			refreshCallbacks(),
			count++,
			Swal.fire({
				position: "center",
				icon: "success",
				title: "Task inserted successfully!",
				showConfirmButton: !1,
				timer: 2e3,
				showCloseButton: !0,
			}));
}),
	editBtn.addEventListener("click", function (e) {
		(document.getElementById("exampleModalLabel").innerHTML = "Edit Order"),
			tasksList.get({ id: idField.value }).forEach(function (e) {
				(isid = new DOMParser().parseFromString(e._values.id, "text/html")),
					isid.body.firstElementChild.innerHTML == itemId &&
						e.values({
							id:
								'<a href="javascript:void(0);" class="fw-medium link-primary">' +
								idField.value +
								"</a>",
							project_name:
								'<a href="apps-projects-overview.html" class="fw-medium link-primary">' +
								projectNameField.value +
								"</a>",
							tasks_name: tasksTitleField.value,
							client_name: clientNameField.value,
							assignedto: assignToUsers(),
							due_date: fomateDate(dateDueField.value),
							status: isStatus(statusField.value),
							priority: isPriority(priorityField.value),
						});
			}),
			document.getElementById("close-modal").click(),
			clearFields(),
			Swal.fire({
				position: "center",
				icon: "success",
				title: "Task updated Successfully!",
				showConfirmButton: !1,
				timer: 2e3,
				showCloseButton: !0,
			});
	});
var example = new Choices(priorityField, { searchEnabled: !1 }),
	statusVal = new Choices(statusField, { searchEnabled: !1 });
function SearchData() {
	var i = document.getElementById("idStatus").value,
		n = document.getElementById("demo-datepicker").value,
		l = n.split(" to ")[0],
		r = n.split(" to ")[1];
	tasksList.filter(function (e) {
		matchData = new DOMParser().parseFromString(e.values().status, "text/html");
		var t = matchData.body.firstElementChild.innerHTML,
			a = !1,
			s = !1,
			a = "all" == t || "all" == i || t == i,
			s =
				new Date(e.values().due_date.slice(0, 12)) >= new Date(l) &&
				new Date(e.values().due_date.slice(0, 12)) <= new Date(r);
		return (a && s) || (a && "" == n ? a : s && "" == n ? s : void 0);
	}),
		tasksList.update();
}
function ischeckboxcheck() {
	document.getElementsByName("checkAll").forEach(function (e) {
		e.addEventListener("click", function (e) {
			e.target.checked
				? e.target.closest("tr").classList.add("table-active")
				: e.target.closest("tr").classList.remove("table-active");
		});
	});
}
function refreshCallbacks() {
	removeBtns.forEach(function (e) {
		e.addEventListener("click", function (e) {
			e.target.closest("tr").children[1].innerText,
				(itemId = e.target.closest("tr").children[1].innerText),
				tasksList.get({ id: itemId }).forEach(function (e) {
					deleteid = new DOMParser().parseFromString(e._values.id, "text/html");
					var t = deleteid.body.firstElementChild;
					deleteid.body.firstElementChild.innerHTML == itemId &&
						document
							.getElementById("delete-record")
							.addEventListener("click", function () {
								tasksList.remove("id", t.outerHTML),
									document.getElementById("deleteOrder").click();
							});
				});
		});
	}),
		editBtns.forEach(function (e) {
			e.addEventListener("click", function (e) {
				e.target.closest("tr").children[1].innerText,
					(itemId = e.target.closest("tr").children[1].innerText),
					tasksList.get({ id: itemId }).forEach(function (e) {
						isid = new DOMParser().parseFromString(e._values.id, "text/html");
						var t,
							a = isid.body.firstElementChild.innerHTML;
						a == itemId &&
							((idField.value = a),
							(project = new DOMParser().parseFromString(
								e._values.project_name,
								"text/html"
							)),
							(a = project.body.firstElementChild.innerHTML),
							statusVal.setChoiceByValue(t),
							(projectNameField.value = a),
							(tasksTitleField.value = e._values.tasks_name),
							(clientNameField.value = e._values.client_name),
							(dateDueField.value = e._values.due_date),
							statusVal && statusVal.destroy(),
							(statusVal = new Choices(statusField, { searchEnabled: !1 })),
							(val = new DOMParser().parseFromString(
								e._values.status,
								"text/html"
							)),
							(t = val.body.firstElementChild.innerHTML),
							statusVal.setChoiceByValue(t),
							example && example.destroy(),
							(example = new Choices(priorityField, { searchEnabled: !1 })),
							(val = new DOMParser().parseFromString(
								e._values.priority,
								"text/html"
							)),
							(t = val.body.firstElementChild.innerHTML),
							example.setChoiceByValue(t),
							flatpickr("#duedate-field", {
								dateFormat: "d M, Y",
								defaultDate: e._values.due_date,
							}));
					});
			});
		});
}
function clearFields() {
	(projectNameField.value = ""),
		(tasksTitleField.value = ""),
		(clientNameField.value = ""),
		(assignedtoNameField.value = ""),
		(dateDueField.value = ""),
		example && example.destroy(),
		(example = new Choices(priorityField)),
		statusVal && statusVal.destroy(),
		(statusVal = new Choices(statusField));
}
function isStatus(e) {
	switch (e) {
		case "Pending":
			return (
				'<span class="badge badge-soft-warning text-uppercase">' + e + "</span>"
			);
		case "Inprogress":
			return (
				'<span class="badge badge-soft-secondary text-uppercase">' +
				e +
				"</span>"
			);
		case "Completed":
			return (
				'<span class="badge badge-soft-success text-uppercase">' + e + "</span>"
			);
		case "New":
			return (
				'<span class="badge badge-soft-info text-uppercase">' + e + "</span>"
			);
	}
}
function isPriority(e) {
	switch (e) {
		case "High":
			return '<span class="badge bg-danger text-uppercase">' + e + "</span>";
		case "Low":
			return '<span class="badge bg-success text-uppercase">' + e + "</span>";
		case "Medium":
			return '<span class="badge bg-warning text-uppercase">' + e + "</span>";
	}
}
function fomateDate(e) {
	var t = new Date(e),
		e = [
			"Jan",
			"Feb",
			"Mar",
			"Apr",
			"May",
			"Jun",
			"Jul",
			"Aug",
			"Sep",
			"Oct",
			"Nov",
			"Dec",
		][t.getMonth()];
	return t.getDate() + " " + e + ", " + t.getFullYear();
}
function assignToUsers() {
	var e = document.querySelectorAll('input[name="assignedTo[]"]:checked'),
		t = '<div class="avatar-group">';
	return (
		0 < e.length
			? e.forEach(function (e) {
					t += `<a href="javascript: void(0);" class="avatar-group-item" data-img="${e.value}" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Username">
                    <img src="${baseURL}public/assets/images/users/${e.value}" alt="" class="rounded-circle avatar-xxs" />
                </a>`;
			  })
			: (t += `<a href="javascript: void(0);" class="avatar-group-item" data-img="https://icon-library.com/images/no-user-image-icon/no-user-image-icon-3.jpg" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Title">
                <img src="https://icon-library.com/images/no-user-image-icon/no-user-image-icon-3.jpg" alt="" class="rounded-circle avatar-xxs" />
            </a>`),
		(t += "</div>")
	);
}
function deleteMultiple() {
	ids_array = [];
	var e,
		t = document.getElementsByName("chk_child");
	for (i = 0; i < t.length; i++)
		1 == t[i].checked &&
			((e =
				t[i].parentNode.parentNode.parentNode.querySelector("td a").innerHTML),
			ids_array.push(e));
	"undefined" != typeof ids_array && 0 < ids_array.length
		? (Swal.fire({
				title: "Are you sure?",
				text: "You won't be able to revert this!",
				icon: "warning",
				showCancelButton: !0,
				confirmButtonClass: "btn btn-primary w-xs me-2 mt-2",
				cancelButtonClass: "btn btn-danger w-xs mt-2",
				confirmButtonText: "Yes, delete it!",
				buttonsStyling: !1,
				showCloseButton: !0,
		  }).then(function (e) {
				if (e.value) {
					for (i = 0; i < ids_array.length; i++)
						tasksList.remove(
							"id",
							`<a href="apps-tasks-details.html" class="fw-medium link-primary">${ids_array[i]}</a>`
						);
					(document.getElementById("checkAll").checked = !1),
						Swal.fire({
							title: "Deleted!",
							text: "Your data has been deleted.",
							icon: "success",
							confirmButtonClass: "btn btn-info w-xs mt-2",
							buttonsStyling: !1,
						});
				}
		  }),
		  (document.getElementById("checkAll").checked = !1))
		: Swal.fire({
				title: "Please select at least one checkbox",
				confirmButtonClass: "btn btn-info",
				buttonsStyling: !1,
				showCloseButton: !0,
		  });
}
document
	.querySelector(".pagination-next")
	.addEventListener("click", function () {
		!document.querySelector(".pagination.listjs-pagination") ||
			(document
				.querySelector(".pagination.listjs-pagination")
				.querySelector(".active") &&
				document
					.querySelector(".pagination.listjs-pagination")
					.querySelector(".active")
					.nextElementSibling.children[0].click());
	}),
	document
		.querySelector(".pagination-prev")
		.addEventListener("click", function () {
			!document.querySelector(".pagination.listjs-pagination") ||
				(document
					.querySelector(".pagination.listjs-pagination")
					.querySelector(".active") &&
					document
						.querySelector(".pagination.listjs-pagination")
						.querySelector(".active")
						.previousSibling.children[0].click());
		});
