const doctorList = document.querySelector('#doctor-list');

// create element & render cafe
function renderDoctor(doc){
    let tr = document.createElement('tr');
    let id_doctor = document.createElement('td');
    let nama_doctor = document.createElement('td');
    let umur = document.createElement('td');


    tr.setAttribute('data-id', doc.id);

    nama_doctor.textContent = doc.data().nama_doctor;
    umur.textContent = doc.data().umur;
    id_doctor.textContent = doc.id;
    

    tr.appendChild(id_doctor);
    tr.appendChild(nama_doctor);
    tr.appendChild(umur);

    doctorList.appendChild(tr);
}


// getting data
db.collection('doctor').get().then(snapshot => {
    snapshot.docs.forEach(doc => {
        renderDoctor(doc);
    })
});

