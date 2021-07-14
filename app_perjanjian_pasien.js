const perjanjianList = document.querySelector('#perjanjian-list');

// create element & render cafe
function renderperjanjian(doc){
    let tr = document.createElement('tr');
    let id_perjanjian = document.createElement('td');
    let nama_doctor = document.createElement('td');
    let nama_pasien = document.createElement('td');
    let deskripsi = document.createElement('td');
    let jadwal = document.createElement('td');

    tr.setAttribute('data-id', doc.id);

    id_perjanjian.textContent = doc.id;
    nama_doctor.textContent = doc.data().nama_doctor;
    nama_pasien.textContent = doc.data().nama_pasien;
    deskripsi.textContent = doc.data().deskripsi;
    jadwal.textContent = doc.data().jadwal;
    

    tr.appendChild(id_perjanjian);
    tr.appendChild(nama_doctor);
    tr.appendChild(nama_pasien);
    tr.appendChild(deskripsi);
    tr.appendChild(jadwal);

    perjanjianList.appendChild(tr);

}

// getting data
db.collection('perjanjian').get().then(snapshot => {
    snapshot.docs.forEach(doc => {
        renderperjanjian(doc);
    })
});