SELECT siswas.nama AS "Nama Siswa", kelas.namaKelas AS "Kelas", gurus.nama AS "Nama Guru"
	FROM codinglab.kelas 
		INNER JOIN codinglab.siswas ON codinglab.kelas.id = codinglab.siswas.kelas_id
		INNER JOIN codinglab.gurus ON codinglab.kelas.id = codinglab.gurus.kelas_id
	WHERE 	siswas.nama = 'BrenttChart'  AND kelas.namaKelas = '5G';
