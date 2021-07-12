const doctorList = document.querySelector('#doctor-list');
const form = document.querySelector('#add-doctor-form');
const edited = document.querySelector('#edit-doctor-form');

// create element & render cafe
function renderDoctor(doc){
    let tr = document.createElement('tr');
    let id_doctor = document.createElement('td');
    let nama_doctor = document.createElement('td');
    let umur = document.createElement('td');
    let deleted = document.createElement('td');


    tr.setAttribute('data-id', doc.id);

    nama_doctor.textContent = doc.data().nama_doctor;
    umur.textContent = doc.data().umur;
    id_doctor.textContent = doc.id;
    deleted.textContent = 'Delete';
    

    tr.appendChild(id_doctor);
    tr.appendChild(nama_doctor);
    tr.appendChild(umur);
    tr.appendChild(deleted);

    doctorList.appendChild(tr);

    // deleting data
    deleted.addEventListener('click', (e) => {
        e.stopPropagation();
        let id = e.target.parentElement.getAttribute('data-id');
        db.collection('doctor').doc(id).delete();
    });

}


// getting data
db.collection('doctor').get().then(snapshot => {
    snapshot.docs.forEach(doc => {
        renderDoctor(doc);
    })
});

// Saving Data
form.addEventListener('submit', (e) => {
    e.preventDefault();
    db.collection('doctor').add({
        nama_doctor : form.nama_doctor.value,
        umur : form.umur.value,
    });
    form.nama_doctor.value = '';
    form.umur.value = '';
})


// Edit Data
edited.addEventListener('submit', (e) => {
    e.preventDefault();
    db.collection('doctor').doc(edited.id_doctor.value).set({
        nama_doctor : edited.nama_doctor.value,
        umur : edited.umur.value,
    });
    edited.nama_doctor.value = '';
    edited.umur.value = '';
    edited.id_doctor.value='';
})