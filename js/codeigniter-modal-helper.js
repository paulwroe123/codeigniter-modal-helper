class Modal {

	constructor() {

		window.onclick = (event) => {

			if (event.target.classList.contains('modal')) {

				this.hideModals();

			}

		}

		window.onkeydown = (event) => {

			let code = event.keyCode || event.which;

			if (code === 27) {

				this.hideModals();

			}

		}

		this.closeButtons = document.getElementsByClassName('close-modal-btn');

		this.modalButtons = document.getElementsByClassName('modal-btn');

		this.modals = document.getElementsByClassName('modal');

		for (let i=0; i<this.modalButtons.length; i++) {

			this.modalButtons[i].onclick = this.showModal;

		}

		for (let i=0; i<this.closeButtons.length; i++) {

			this.closeButtons[i].onclick = this.closeModal;

		}

	}

	closeModal(event) {

		let modal = event.target.parentNode.parentNode;

		modal.style.display = 'none';

	}

	hideModals() {

		for (let i=0; i<this.modals.length; i++) {

			this.modals[i].style.display = 'none';

		}

	}

	showModal(event) {

		event.preventDefault();

		let modalId = event.target.getAttribute('data-modal-id');

		let modalToShow = document.getElementById(modalId);

		modalToShow.style.display = 'block';

	}

}