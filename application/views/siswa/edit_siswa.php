<form action="<?php echo base_url();?>siswa/updatesiswa" class="formSiswa" method="POST">
    <div class="form-group mb-3">
    <label class="form-label">ID Siswa</label>  
        <input type="text" readonly value="<?php echo $siswa['nik'] ?>" class="form-control" name="nik" placeholder="NIK">
    </div>
    <div class="form-group mb-3">
    <label class="form-label">Nama Lengkap</label>
        <input type="text" value="<?php echo $siswa['nama'] ?>" class="form-control" name="nama" placeholder="Nama Lengkap">
    </div>
    <div class="form-group mb-3">
        <?php
            $tgl = substr($siswa['tgl_lahir'], -2);
            $bln = substr($siswa['tgl_lahir'], -5,2);
            $thn = substr($siswa['tgl_lahir'], 0,4);
        ?>
        <label class="form-label">Alamat</label>
        <input type="text" value="<?php echo $siswa['alamat'] ?>" class="form-control" name="alamat" placeholder="Alamat">
    </div>
    <div class="form-group mb-3">
        <label class="form-label">Nomor Hp Siswa</label>
        <input type="text" value="<?php echo $siswa['no_hp'] ?>" class="form-control" name="no_hp" maxlength="13" placeholder="No HP">
    </div>
    <div class="form-group mb-3">
        <label class="form-label">Asal Sekolah</label>
        <input type="text" value="<?php echo $siswa['asal_sekolah'] ?>" class="form-control" name="asal" placeholder="Asal Sekolah">
    </div>
    <div class="form-group mb-3">
        <label class="form-label">Kelas</label>
        <select name="kelas" class="form-select">
            <option value="">Kelas</option>
            <option <?php if($siswa['kelas']==1){echo "selected";} ?> value="1">1</option>
            <option <?php if($siswa['kelas']==2){echo "selected";} ?> value="2">2</option>
            <option <?php if($siswa['kelas']==3){echo "selected";} ?> value="3">3</option>
            <option <?php if($siswa['kelas']==4){echo "selected";} ?> value="4">4</option>
            <option <?php if($siswa['kelas']==5){echo "selected";} ?> value="5">5</option>
            <option <?php if($siswa['kelas']==6){echo "selected";} ?> value="6">6</option>
            <option <?php if($siswa['kelas']==7){echo "selected";} ?> value="7">7</option>
            <option <?php if($siswa['kelas']==8){echo "selected";} ?> value="8">8</option>
            <option <?php if($siswa['kelas']==9){echo "selected";} ?> value="9">9</option>
            <option <?php if($siswa['kelas']==10){echo "selected";} ?> value="10">10</option>
            <option <?php if($siswa['kelas']==11){echo "selected";} ?> value="11">11</option>
            <option <?php if($siswa['kelas']==12){echo "selected";} ?> value="12">12</option>
        </select>
    </div>
    <div class="form-group mb-3">
        <label class="form-label">Tanggal Lahir</label>
        <div class="row g-2">
        <div class="col-3">
            <select name="hari" class="form-select">
            <option <?php if($tgl=='1'){ echo "selected"; } ?> value="1" >1</option>
            <option <?php if($tgl=='2'){ echo "selected"; } ?> value="2" >2</option>
            <option <?php if($tgl=='3'){ echo "selected"; } ?> value="3" >3</option>
            <option <?php if($tgl=='4'){ echo "selected"; } ?> value="4" >4</option>
            <option <?php if($tgl=='5'){ echo "selected"; } ?> value="5" >5</option>
            <option <?php if($tgl=='6'){ echo "selected"; } ?> value="6" >6</option>
            <option <?php if($tgl=='7'){ echo "selected"; } ?> value="7" >7</option>
            <option <?php if($tgl=='8'){ echo "selected"; } ?> value="8" >8</option>
            <option <?php if($tgl=='9'){ echo "selected"; } ?> value="9" >9</option>
            <option <?php if($tgl=='10'){ echo "selected"; } ?> value="10" >10</option>
            <option <?php if($tgl=='11'){ echo "selected"; } ?> value="11" >11</option>
            <option <?php if($tgl=='12'){ echo "selected"; } ?> value="12" >12</option>
            <option <?php if($tgl=='13'){ echo "selected"; } ?> value="13" >13</option>
            <option <?php if($tgl=='14'){ echo "selected"; } ?> value="14" >14</option>
            <option <?php if($tgl=='15'){ echo "selected"; } ?> value="15" >15</option>
            <option <?php if($tgl=='16'){ echo "selected"; } ?> value="16" >16</option>
            <option <?php if($tgl=='17'){ echo "selected"; } ?> value="17" >17</option>
            <option <?php if($tgl=='18'){ echo "selected"; } ?> value="18" >18</option>
            <option <?php if($tgl=='19'){ echo "selected"; } ?> value="19" >19</option>
            <option <?php if($tgl=='20'){ echo "selected"; } ?> value="20" >20</option>
            <option <?php if($tgl=='21'){ echo "selected"; } ?> value="21" >21</option>
            <option <?php if($tgl=='22'){ echo "selected"; } ?> value="22" >22</option>
            <option <?php if($tgl=='23'){ echo "selected"; } ?> value="23" >23</option>
            <option <?php if($tgl=='24'){ echo "selected"; } ?> value="24" >24</option>
            <option <?php if($tgl=='25'){ echo "selected"; } ?> value="25" >25</option>
            <option <?php if($tgl=='26'){ echo "selected"; } ?> value="26" >26</option>
            <option <?php if($tgl=='27'){ echo "selected"; } ?> value="27" >27</option>
            <option <?php if($tgl=='28'){ echo "selected"; } ?> value="28" >28</option>
            <option <?php if($tgl=='29'){ echo "selected"; } ?> value="29" >29</option>
            <option <?php if($tgl=='30'){ echo "selected"; } ?> value="30" >30</option>
            <option <?php if($tgl=='31'){ echo "selected"; } ?> value="31" >31</option>
            </select>
        </div>
        <div class="col-5">
            <select name="bulan" class="form-select">
            <option <?php if($bln=='1'){ echo "selected"; } ?> value="1">Januari</option>
            <option <?php if($bln=='2'){ echo "selected"; } ?> value="2">Februari</option>
            <option <?php if($bln=='3'){ echo "selected"; } ?> value="3">Maret</option>
            <option <?php if($bln=='4'){ echo "selected"; } ?> value="4">April</option>
            <option <?php if($bln=='5'){ echo "selected"; } ?> value="5">Mei</option>
            <option <?php if($bln=='6'){ echo "selected"; } ?> value="6">Juni</option>
            <option <?php if($bln=='7'){ echo "selected"; } ?> value="7">Juli</option>
            <option <?php if($bln=='8'){ echo "selected"; } ?> value="8">Agustus</option>
            <option <?php if($bln=='9'){ echo "selected"; } ?> value="9">September</option>
            <option <?php if($bln=='10'){ echo "selected"; } ?> value="10">Oktober</option>
            <option <?php if($bln=='11'){ echo "selected"; } ?> value="11">November</option>
            <option <?php if($bln=='12'){ echo "selected"; } ?> value="12">Desember</option>
            </select>
        </div>
        <div class="col-4">
            <select name="tahun" class="form-select">
            <option <?php if($thn=='2021'){ echo "selected"; } ?> value="2021" >2021</option>
            <option <?php if($thn=='2020'){ echo "selected"; } ?> value="2020" >2020</option>
            <option <?php if($thn=='2019'){ echo "selected"; } ?> value="2019" >2019</option>
            <option <?php if($thn=='2018'){ echo "selected"; } ?> value="2018" >2018</option>
            <option <?php if($thn=='2017'){ echo "selected"; } ?> value="2017" >2017</option>
            <option <?php if($thn=='2016'){ echo "selected"; } ?> value="2016" >2016</option>
            <option <?php if($thn=='2015'){ echo "selected"; } ?> value="2015" >2015</option>
            <option <?php if($thn=='2014'){ echo "selected"; } ?> value="2014" >2014</option>
            <option <?php if($thn=='2013'){ echo "selected"; } ?> value="2013" >2013</option>
            <option <?php if($thn=='2012'){ echo "selected"; } ?> value="2012" >2012</option>
            <option <?php if($thn=='2011'){ echo "selected"; } ?> value="2011" >2011</option>
            <option <?php if($thn=='2010'){ echo "selected"; } ?> value="2010" >2010</option>
            <option <?php if($thn=='2009'){ echo "selected"; } ?> value="2009" >2009</option>
            <option <?php if($thn=='2008'){ echo "selected"; } ?> value="2008" >2008</option>
            <option <?php if($thn=='2007'){ echo "selected"; } ?> value="2007" >2007</option>
            <option <?php if($thn=='2006'){ echo "selected"; } ?> value="2006" >2006</option>
            <option <?php if($thn=='2005'){ echo "selected"; } ?> value="2005" >2005</option>
            <option <?php if($thn=='2004'){ echo "selected"; } ?> value="2004" >2004</option>
            <option <?php if($thn=='2003'){ echo "selected"; } ?> value="2003" >2003</option>
            <option <?php if($thn=='2002'){ echo "selected"; } ?> value="2002" >2002</option>
            <option <?php if($thn=='2001'){ echo "selected"; } ?> value="2001" >2001</option>
            <option <?php if($thn=='2000'){ echo "selected"; } ?> value="2000" >2000</option>
            <option <?php if($thn=='1999'){ echo "selected"; } ?> value="1999" >1999</option>
            <option <?php if($thn=='1998'){ echo "selected"; } ?> value="1998" >1998</option>
            <option <?php if($thn=='1997'){ echo "selected"; } ?> value="1997" >1997</option>
            <option <?php if($thn=='1996'){ echo "selected"; } ?> value="1996" >1996</option>
            <option <?php if($thn=='1995'){ echo "selected"; } ?> value="1995" >1995</option>
            <option <?php if($thn=='1994'){ echo "selected"; } ?> value="1994" >1994</option>
            <option <?php if($thn=='1993'){ echo "selected"; } ?> value="1993" >1993</option>
            <option <?php if($thn=='1992'){ echo "selected"; } ?> value="1992" >1992</option>
            <option <?php if($thn=='1991'){ echo "selected"; } ?> value="1991" >1991</option>
            <option <?php if($thn=='1990'){ echo "selected"; } ?> value="1990" >1990</option>
            <option <?php if($thn=='1989'){ echo "selected"; } ?> value="1989" >1989</option>
            <option <?php if($thn=='1988'){ echo "selected"; } ?> value="1988" >1988</option>
            <option <?php if($thn=='1987'){ echo "selected"; } ?> value="1987" >1987</option>
            <option <?php if($thn=='1986'){ echo "selected"; } ?> value="1986" >1986</option>
            <option <?php if($thn=='1985'){ echo "selected"; } ?> value="1985" >1985</option>
            <option <?php if($thn=='1984'){ echo "selected"; } ?> value="1984" >1984</option>
            <option <?php if($thn=='1983'){ echo "selected"; } ?> value="1983" >1983</option>
            <option <?php if($thn=='1982'){ echo "selected"; } ?> value="1982" >1982</option>
            <option <?php if($thn=='1981'){ echo "selected"; } ?> value="1981" >1981</option>
            <option <?php if($thn=='1980'){ echo "selected"; } ?> value="1980" >1980</option>
            <option <?php if($thn=='1979'){ echo "selected"; } ?> value="1979" >1979</option>
            <option <?php if($thn=='1978'){ echo "selected"; } ?> value="1978" >1978</option>
            <option <?php if($thn=='1977'){ echo "selected"; } ?> value="1977" >1977</option>
            <option <?php if($thn=='1976'){ echo "selected"; } ?> value="1976" >1976</option>
            <option <?php if($thn=='1975'){ echo "selected"; } ?> value="1975" >1975</option>
            <option <?php if($thn=='1974'){ echo "selected"; } ?> value="1974" >1974</option>
            <option <?php if($thn=='1973'){ echo "selected"; } ?> value="1973" >1973</option>
            <option <?php if($thn=='1972'){ echo "selected"; } ?> value="1972" >1972</option>
            <option <?php if($thn=='1971'){ echo "selected"; } ?> value="1971" >1971</option>
            <option <?php if($thn=='1970'){ echo "selected"; } ?> value="1970" >1970</option>
            <option <?php if($thn=='1969'){ echo "selected"; } ?> value="1969" >1969</option>
            <option <?php if($thn=='1968'){ echo "selected"; } ?> value="1968" >1968</option>
            <option <?php if($thn=='1967'){ echo "selected"; } ?> value="1967" >1967</option>
            <option <?php if($thn=='1966'){ echo "selected"; } ?> value="1966" >1966</option>
            <option <?php if($thn=='1965'){ echo "selected"; } ?> value="1965" >1965</option>
            <option <?php if($thn=='1964'){ echo "selected"; } ?> value="1964" >1964</option>
            <option <?php if($thn=='1963'){ echo "selected"; } ?> value="1963" >1963</option>
            <option <?php if($thn=='1962'){ echo "selected"; } ?> value="1962" >1962</option>
            <option <?php if($thn=='1961'){ echo "selected"; } ?> value="1961" >1961</option>
            <option <?php if($thn=='1960'){ echo "selected"; } ?> value="1960" >1960</option>
            <option <?php if($thn=='1959'){ echo "selected"; } ?> value="1959" >1959</option>
            <option <?php if($thn=='1958'){ echo "selected"; } ?> value="1958" >1958</option>
            <option <?php if($thn=='1957'){ echo "selected"; } ?> value="1957" >1957</option>
            <option <?php if($thn=='1956'){ echo "selected"; } ?> value="1956" >1956</option>
            <option <?php if($thn=='1955'){ echo "selected"; } ?> value="1955" >1955</option>
            <option <?php if($thn=='1954'){ echo "selected"; } ?> value="1954" >1954</option>
            <option <?php if($thn=='1953'){ echo "selected"; } ?> value="1953" >1953</option>
            <option <?php if($thn=='1952'){ echo "selected"; } ?> value="1952" >1952</option>
            <option <?php if($thn=='1951'){ echo "selected"; } ?> value="1951" >1951</option>
            <option <?php if($thn=='1950'){ echo "selected"; } ?> value="1950" >1950</option>
            <option <?php if($thn=='1949'){ echo "selected"; } ?> value="1949" >1949</option>
            <option <?php if($thn=='1948'){ echo "selected"; } ?> value="1948" >1948</option>
            <option <?php if($thn=='1947'){ echo "selected"; } ?> value="1947" >1947</option>
            <option <?php if($thn=='1946'){ echo "selected"; } ?> value="1946" >1946</option>
            <option <?php if($thn=='1945'){ echo "selected"; } ?> value="1945" >1945</option>
            <option <?php if($thn=='1944'){ echo "selected"; } ?> value="1944" >1944</option>
            <option <?php if($thn=='1943'){ echo "selected"; } ?> value="1943" >1943</option>
            <option <?php if($thn=='1942'){ echo "selected"; } ?> value="1942" >1942</option>
            <option <?php if($thn=='1941'){ echo "selected"; } ?> value="1941" >1941</option>
            <option <?php if($thn=='1940'){ echo "selected"; } ?> value="1940" >1940</option>
            <option <?php if($thn=='1939'){ echo "selected"; } ?> value="1939" >1939</option>
            <option <?php if($thn=='1938'){ echo "selected"; } ?> value="1938" >1938</option>
            <option <?php if($thn=='1937'){ echo "selected"; } ?> value="1937" >1937</option>
            <option <?php if($thn=='1936'){ echo "selected"; } ?> value="1936" >1936</option>
            <option <?php if($thn=='1935'){ echo "selected"; } ?> value="1935" >1935</option>
            <option <?php if($thn=='1934'){ echo "selected"; } ?> value="1934" >1934</option>
            <option <?php if($thn=='1933'){ echo "selected"; } ?> value="1933" >1933</option>
            <option <?php if($thn=='1932'){ echo "selected"; } ?> value="1932" >1932</option>
            <option <?php if($thn=='1931'){ echo "selected"; } ?> value="1931" >1931</option>
            <option <?php if($thn=='1930'){ echo "selected"; } ?> value="1930" >1930</option>
            <option <?php if($thn=='1929'){ echo "selected"; } ?> value="1929" >1929</option>
            <option <?php if($thn=='1928'){ echo "selected"; } ?> value="1928" >1928</option>
            <option <?php if($thn=='1927'){ echo "selected"; } ?> value="1927" >1927</option>
            <option <?php if($thn=='1926'){ echo "selected"; } ?> value="1926" >1926</option>
            <option <?php if($thn=='1925'){ echo "selected"; } ?> value="1925" >1925</option>
            <option <?php if($thn=='1924'){ echo "selected"; } ?> value="1924" >1924</option>
            <option <?php if($thn=='1923'){ echo "selected"; } ?> value="1923" >1923</option>
            <option <?php if($thn=='1922'){ echo "selected"; } ?> value="1922" >1922</option>
            <option <?php if($thn=='1921'){ echo "selected"; } ?> value="1921" >1921</option>
            <option <?php if($thn=='1920'){ echo "selected"; } ?> value="1920" >1920</option>
            <option <?php if($thn=='1919'){ echo "selected"; } ?> value="1919" >1919</option>
            <option <?php if($thn=='1918'){ echo "selected"; } ?> value="1918" >1918</option>
            <option <?php if($thn=='1917'){ echo "selected"; } ?> value="1917" >1917</option>
            <option <?php if($thn=='1916'){ echo "selected"; } ?> value="1916" >1916</option>
            <option <?php if($thn=='1915'){ echo "selected"; } ?> value="1915" >1915</option>
            <option <?php if($thn=='1914'){ echo "selected"; } ?> value="1914" >1914</option>
            <option <?php if($thn=='1913'){ echo "selected"; } ?> value="1913" >1913</option>
            <option <?php if($thn=='1912'){ echo "selected"; } ?> value="1912" >1912</option>
            <option <?php if($thn=='1911'){ echo "selected"; } ?> value="1911" >1911</option>
            <option <?php if($thn=='1910'){ echo "selected"; } ?> value="1910" >1910</option>
            <option <?php if($thn=='1909'){ echo "selected"; } ?> value="1909" >1909</option>
            <option <?php if($thn=='1908'){ echo "selected"; } ?> value="1908" >1908</option>
            <option <?php if($thn=='1907'){ echo "selected"; } ?> value="1907" >1907</option>
            <option <?php if($thn=='1906'){ echo "selected"; } ?> value="1906" >1906</option>
            <option <?php if($thn=='1905'){ echo "selected"; } ?> value="1905" >1905</option>
            <option <?php if($thn=='1904'){ echo "selected"; } ?> value="1904" >1904</option>
            <option <?php if($thn=='1903'){ echo "selected"; } ?> value="1903" >1903</option>
            <option <?php if($thn=='1902'){ echo "selected"; } ?> value="1902" >1902</option>
            <option <?php if($thn=='1901'){ echo "selected"; } ?> value="1901" >1901</option>
            <option <?php if($thn=='1900'){ echo "selected"; } ?> value="1900" >1900</option>
            <option <?php if($thn=='1899'){ echo "selected"; } ?> value="1899" >1899</option>
            <option <?php if($thn=='1898'){ echo "selected"; } ?> value="1898" >1898</option>
            <option <?php if($thn=='1897'){ echo "selected"; } ?> value="1897" >1897</option>
            </select>
        </div>
        </div>
    </div>
    <div class="form-group mb-3">
        <label class="form-label">Nama Wali</label>
        <input type="text" value="<?php echo $siswa['nama_wali'] ?>" class="form-control" name="nama_wali" placeholder="Nama Wali">
    </div>
    <div class="form-group mb-3">
        <label class="form-label">Nomor Hp Wali</label>
        <input type="text" value="<?php echo $siswa['hp_wali'] ?>" class="form-control" name="hp_wali" maxlength="13" placeholder="No Hp Wali">
    </div>
    <div class="md-3">
        <button type="submit" class="btn btn-primary w-100"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="10" y1="14" x2="21" y2="3" /><path d="M21 3l-6.5 18a0.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a0.55 .55 0 0 1 0 -1l18 -6.5" /></svg>
        Update</button>
    </div>
</form>
<script>
    $(function(){
        $('.formBarang').bootstrapValidator({
            fields: {
                nik: {
                    message: 'NIK tidak valid !',
                    validators: {
                        notEmpty: {
                            message: '*NIK tidak boleh kosong !'
                        }
                    }
                },
                nama: {
                    message: 'Nama tidak valid !',
                    validators: {
                        notEmpty: {
                            message: '*Nama tidak boleh kosong !'
                        }
                    }
                },
                alamat: {
                    message: 'alamat tidak valid !',
                    validators: {
                        notEmpty: {
                            message: '*Alamat tidak boleh kosong !'
                        }
                    }
                },
                no_hp: {
                    message: 'Nomor Hp tidak valid !',
                    validators: {
                        notEmpty: {
                            message: '*Nomor Hp tidak boleh kosong !'
                        }
                    }
                },
                asal: {
                    message: 'Asal sekolah tidak valid !',
                    validators: {
                        notEmpty: {
                            message: '*Asal sekolah tidak boleh kosong !'
                        }
                    }
                },
                kelas: {
                    message: 'Kelas tidak valid !',
                    validators: {
                        notEmpty: {
                            message: '*Kelas tidak boleh kosong !'
                        }
                    }
                },
                hari: {
                    message: 'tanggal tidak valid !',
                    validators: {
                        notEmpty: {
                            message: '*Tanggal'
                        }
                    }
                },
                bulan: {
                    message: 'bulan tidak valid !',
                    validators: {
                        notEmpty: {
                            message: ', Bulan'
                        }
                    }
                },
                tahun: {
                    message: 'tahun tidak valid !',
                    validators: {
                        notEmpty: {
                            message: ', dan Tahun tidak boleh kosong !'
                        }
                    }
                },
                nama_wali: {
                    message: 'nama wali tidak valid !',
                    validators: {
                        notEmpty: {
                            message: '*Nama Wali tidak boleh kosong !'
                        }
                    }
                },
                hp_wali: {
                    message: 'No Hp wali tidak valid !',
                    validators: {
                        notEmpty: {
                            message: '*Nomor Hp Wali tidak boleh kosong !'
                        }
                    }
                },
            }
        });
    });
</script>