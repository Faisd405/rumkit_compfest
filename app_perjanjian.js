const perjanjianList = document.querySelector('#perjanjian-list');
const form = document.querySelector('#add-perjanjian-form');
const edited = document.querySelector('#edit-perjanjian-form');

// create element & render cafe
function renderperjanjian(doc){
    let tr = document.createElement('tr');
    let id_perjanjian = document.createElement('td');
    let nama_doctor = document.createElement('td');
    let nama_pasien = document.createElement('td');
    let deskripsi = document.createElement('td');
    let jadwal = document.createElement('td');
    let deleted = document.createElement('td');


    tr.setAttribute('data-id', doc.id);

    id_perjanjian.textContent = doc.id;
    nama_doctor.textContent = doc.data().nama_doctor;
    nama_pasien.textContent = doc.data().nama_pasien;
    deskripsi.textContent = doc.data().deskripsi;
    jadwal.textContent = doc.data().jadwal;
    deleted.textContent = 'Delete';
    

    tr.appendChild(id_perjanjian);
    tr.appendChild(nama_doctor);
    tr.appendChild(nama_pasien);
    tr.appendChild(deskripsi);
    tr.appendChild(jadwal);
    tr.appendChild(deleted);

    perjanjianList.appendChild(tr);

    // deleting data
    deleted.addEventListener('click', (e) => {
        e.stopPropagation();
        let id = e.target.parentElement.getAttribute('data-id');
        db.collection('perjanjian').doc(id).delete();
    });

}

// getting data
db.collection('perjanjian').get().then(snapshot => {
    snapshot.docs.forEach(doc => {
        renderperjanjian(doc);
    })
});


// Saving Data
form.addEventListener('submit', (e) => {
    e.preventDefault();
    db.collection('perjanjian').add({
        nama_doctor : form.nama_doctor.value,
        nama_pasien : form.nama_pasien.value,
        deskripsi : form.deskripsi.value,
        jadwal : form.jadwal.value,
    });
    form.nama_doctor.value = '';
    form.nama_pasien.value = '';
    form.deskripsi.value = '';
    form.jadwal.value = '';
})

// Edit Data
edited.addEventListener('submit', (e) => {
    e.preventDefault();
    db.collection('perjanjian').doc(edited.id_perjanjian.value).set({
        nama_doctor : edited.nama_doctor.value,
        nama_pasien : edited.nama_pasien.value,
        deskripsi : edited.deskripsi.value,
        jadwal : edited.jadwal.value,
    });
    edited.nama_doctor.value = '';
    edited.nama_pasien.value = '';
    edited.deskripsi.value = '';
    edited.jadwal.value = '';
    edited.id_perjanjian.value = '';
})