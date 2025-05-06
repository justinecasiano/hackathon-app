function fetchModal(url, data, button, onSuccess, onError) {
  const formData = new FormData(data);

  fetch(url, {
    method: 'POST',
    body: formData
  })
    .then(response => response.json())
    .then(data => {
      const modalBody = document.getElementById('responseModalBody');
      const modalHeader = document.getElementById('responseModalHeader');

      modalBody.textContent = data.message || 'Unexpected response';

      modalBody.classList.remove('error', 'success');
      modalHeader.classList.remove('error', 'success');

      if (data.status === 'success') {
        modalBody.classList.add('success');
        modalHeader.classList.add('success');

        if (onSuccess) onSuccess();

        if (data.redirect) {
          setTimeout(() => {
            window.location.href = data.redirect;
          }, data.delay || 1000);
        }
      } else {
        modalBody.classList.add('error');
        modalHeader.classList.add('error');
        if (onError) onError();

        console.error('Error:', data.error);
      }

      // Show the modal
      const responseModal = new bootstrap.Modal(document.getElementById('responseModal'));
      responseModal.show();
      button.disabled = false;
    })
    .catch(error => {

      document.getElementById('responseModalBody').textContent = 'An error occurred. Please try again.';

      modalHeader.classList.remove('error', 'success');
      modalHeader.classList.add('error');

      modalBody.classList.remove('error', 'success');
      modalBody.classList.add('error');

      const responseModal = new bootstrap.Modal(document.getElementById('responseModal'));
      responseModal.show();
      console.error('Error:', error);
      button.disabled = false;
    });
}

function updateFormControl(elements, status) {
  elements.forEach((element, index) => {
    const input = document.getElementById(element);

    if (status === 'error') {
      input.classList.add('red-outline');
      input.value = "";
    } else {
      input.classList.remove('red-outline');
    }
  });
}

function clearAllFields(elements) {
  elements.forEach((element, index) => {
    const input = document.getElementById(element);
    input.value = "";
  });
}

function logout() {
  fetch('/api/logout')
    .then(response => response.json())
    .then(data => {
      const modalBody = document.getElementById('responseModalBody');
      const modalHeader = document.getElementById('responseModalHeader');

      modalBody.textContent = data.message || 'Unexpected response';

      modalHeader.classList.remove('error', 'success');

      if (data.status === 'success') {
        modalHeader.classList.add('success');

        if (data.redirect) {
          setTimeout(() => {
            window.location.href = data.redirect;
          }, data.delay || 1000);
        }
      } else {
        modalHeader.classList.add('error');
      }

      // Show the modal
      const responseModal = new bootstrap.Modal(document.getElementById('responseModal'));
      responseModal.show();
    })
    .catch(error => {

      document.getElementById('responseModalBody').textContent = 'An error occurred. Please try again.';

      modalHeader.classList.remove('error', 'success');
      modalHeader.classList.add('error');

      const responseModal = new bootstrap.Modal(document.getElementById('responseModal'));
      responseModal.show();
      console.error('Error:', error);
    });
}