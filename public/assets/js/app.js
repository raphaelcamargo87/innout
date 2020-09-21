(function () {
	const menuToggle = document.querySelector(".menu-toggle");
	menuToggle.onclick = function () {
		const body = document.querySelector("body");
		body.classList.toggle("hide-sidebar");
	}
})();

function addOneSecond(hours, minutes, seconds) {
	const d = new Date();
	d.setHours(parseInt(hours));
	d.setMinutes(parseInt(minutes));
	d.setSeconds(parseInt(seconds) + 1);
	const h = `${d.getHours()}`.padStart(2, 0);
	const m = `${d.getMinutes()}`.padStart(2, 0);
	const s = `${d.getSeconds()}`.padStart(2, 0);

	return `${h}:${m}:${s}`;
}

function activateClock() {
	const activeClock = document.querySelector('[active-clock]');
	if (!activeClock) return
	setInterval(function () {
		const parts = activeClock.innerHTML.split(':');
		activeClock.innerHTML = addOneSecond(...parts);
	}, 1000);
}

function deleteUser() {
	$("a[deleteId]").on('click', function(){
		id = $(this).attr('deleteId');
		if(id){
			if (confirm("Tem certeza que deseja excluir este usuário?\n\nTodos os seus registros serão apagados.")){
				$.ajax({
					url: "deleteController.php",
					method: 'post',
					// dataType: 'json',
					data: {
						'id': id,
					}
				}).done(function(){					
					window.location.href="usersController.php";
				})
			}
		}
	})
}
deleteUser();
activateClock();