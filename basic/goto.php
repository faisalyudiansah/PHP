<?php 

// operator loncat-loncat code tapi jarang digunakan karena akan membingungkan beberapa anggota team programmer

echo "ini akan tetap kena \n";

goto kesini;
echo "tidak akan tampil karena diloncatin dengan operator goto \n";

echo "tidak akan tampil karena diloncatin dengan operator goto \n";

kesini:
echo "loncat ke sini \n";

echo "ini akan tetap kena \n";

//=============================================================

$counter = 1;
while (true) {
    echo "ini while ke $counter \n";
    $counter++;
    if($counter > 10) {
        goto end;
    }
}

end:
echo "end loop";

?>