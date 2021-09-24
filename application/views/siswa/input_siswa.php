<form action="<?php echo base_url();?>siswa/simpansiswa" class="formSiswa" method="POST">
    <div class="form-group mb-3">
        <input type="text" class="form-control" name="nik" maxlength="16" placeholder="NIK">
    </div>
    <div class="form-group mb-3">
        <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
    </div>
    <div class="form-group mb-3">
        <input type="text" class="form-control" name="alamat" placeholder="Alamat">
    </div>
    <div class="form-group mb-3">
        <input type="text" class="form-control" name="no_hp" maxlength="13" placeholder="No HP">
    </div>
    <div class="form-group mb-3">
        <input type="text" class="form-control" name="asal" placeholder="Asal Sekolah">
    </div>
    <div class="form-group mb-3">
        <select name="kelas" class="form-select">
            <option value="">Kelas</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
        </select>
    </div>
    <div class="form-group mb-3">
        <label class="form-label">Tanggal Lahir</label>
        <div class="row g-2">
        <div class="col-3">
            <select name="hari" class="form-select">
            <option value="" selected="selected">Tanggal</option>
            <option value="1" >1</option>
            <option value="2" >2</option>
            <option value="3" >3</option>
            <option value="4" >4</option>
            <option value="5" >5</option>
            <option value="6" >6</option>
            <option value="7" >7</option>
            <option value="8" >8</option>
            <option value="9" >9</option>
            <option value="10" >10</option>
            <option value="11" >11</option>
            <option value="12" >12</option>
            <option value="13" >13</option>
            <option value="14" >14</option>
            <option value="15" >15</option>
            <option value="16" >16</option>
            <option value="17" >17</option>
            <option value="18" >18</option>
            <option value="19" >19</option>
            <option value="20" >20</option>
            <option value="21" >21</option>
            <option value="22" >22</option>
            <option value="23" >23</option>
            <option value="24" >24</option>
            <option value="25" >25</option>
            <option value="26" >26</option>
            <option value="27" >27</option>
            <option value="28" >28</option>
            <option value="29" >29</option>
            <option value="30" >30</option>
            <option value="31" >31</option>
            </select>
        </div>
        <div class="col-5">
            <select name="bulan" class="form-select">
            <option selected="selected" value="">Bulan</option>
            <option value="1">Januari</option>
            <option value="2">Februari</option>
            <option value="3">Maret</option>
            <option value="4">April</option>
            <option value="5">Mei</option>
            <option value="6">Juni</option>
            <option value="7">Juli</option>
            <option value="8">Agustus</option>
            <option value="9">September</option>
            <option value="10">Oktober</option>
            <option value="11">November</option>
            <option value="12">Desember</option>
            </select>
        </div>
        <div class="col-4">
            <select name="tahun" class="form-select">
            <option value="" selected="selected">Tahun</option>
            <option value="2021" >2021</option>
            <option value="2020" >2020</option>
            <option value="2019" >2019</option>
            <option value="2018" >2018</option>
            <option value="2017" >2017</option>
            <option value="2016" >2016</option>
            <option value="2015" >2015</option>
            <option value="2014" >2014</option>
            <option value="2013" >2013</option>
            <option value="2012" >2012</option>
            <option value="2011" >2011</option>
            <option value="2010" >2010</option>
            <option value="2009" >2009</option>
            <option value="2008" >2008</option>
            <option value="2007" >2007</option>
            <option value="2006" >2006</option>
            <option value="2005" >2005</option>
            <option value="2004" >2004</option>
            <option value="2003" >2003</option>
            <option value="2002" >2002</option>
            <option value="2001" >2001</option>
            <option value="2000" >2000</option>
            <option value="1999" >1999</option>
            <option value="1998" >1998</option>
            <option value="1997" >1997</option>
            <option value="1996" >1996</option>
            <option value="1995" >1995</option>
            <option value="1994" >1994</option>
            <option value="1993" >1993</option>
            <option value="1992" >1992</option>
            <option value="1991" >1991</option>
            <option value="1990" >1990</option>
            <option value="1989" >1989</option>
            <option value="1988" >1988</option>
            <option value="1987" >1987</option>
            <option value="1986" >1986</option>
            <option value="1985" >1985</option>
            <option value="1984" >1984</option>
            <option value="1983" >1983</option>
            <option value="1982" >1982</option>
            <option value="1981" >1981</option>
            <option value="1980" >1980</option>
            <option value="1979" >1979</option>
            <option value="1978" >1978</option>
            <option value="1977" >1977</option>
            <option value="1976" >1976</option>
            <option value="1975" >1975</option>
            <option value="1974" >1974</option>
            <option value="1973" >1973</option>
            <option value="1972" >1972</option>
            <option value="1971" >1971</option>
            <option value="1970" >1970</option>
            <option value="1969" >1969</option>
            <option value="1968" >1968</option>
            <option value="1967" >1967</option>
            <option value="1966" >1966</option>
            <option value="1965" >1965</option>
            <option value="1964" >1964</option>
            <option value="1963" >1963</option>
            <option value="1962" >1962</option>
            <option value="1961" >1961</option>
            <option value="1960" >1960</option>
            <option value="1959" >1959</option>
            <option value="1958" >1958</option>
            <option value="1957" >1957</option>
            <option value="1956" >1956</option>
            <option value="1955" >1955</option>
            <option value="1954" >1954</option>
            <option value="1953" >1953</option>
            <option value="1952" >1952</option>
            <option value="1951" >1951</option>
            <option value="1950" >1950</option>
            <option value="1949" >1949</option>
            <option value="1948" >1948</option>
            <option value="1947" >1947</option>
            <option value="1946" >1946</option>
            <option value="1945" >1945</option>
            <option value="1944" >1944</option>
            <option value="1943" >1943</option>
            <option value="1942" >1942</option>
            <option value="1941" >1941</option>
            <option value="1940" >1940</option>
            <option value="1939" >1939</option>
            <option value="1938" >1938</option>
            <option value="1937" >1937</option>
            <option value="1936" >1936</option>
            <option value="1935" >1935</option>
            <option value="1934" >1934</option>
            <option value="1933" >1933</option>
            <option value="1932" >1932</option>
            <option value="1931" >1931</option>
            <option value="1930" >1930</option>
            <option value="1929" >1929</option>
            <option value="1928" >1928</option>
            <option value="1927" >1927</option>
            <option value="1926" >1926</option>
            <option value="1925" >1925</option>
            <option value="1924" >1924</option>
            <option value="1923" >1923</option>
            <option value="1922" >1922</option>
            <option value="1921" >1921</option>
            <option value="1920" >1920</option>
            <option value="1919" >1919</option>
            <option value="1918" >1918</option>
            <option value="1917" >1917</option>
            <option value="1916" >1916</option>
            <option value="1915" >1915</option>
            <option value="1914" >1914</option>
            <option value="1913" >1913</option>
            <option value="1912" >1912</option>
            <option value="1911" >1911</option>
            <option value="1910" >1910</option>
            <option value="1909" >1909</option>
            <option value="1908" >1908</option>
            <option value="1907" >1907</option>
            <option value="1906" >1906</option>
            <option value="1905" >1905</option>
            <option value="1904" >1904</option>
            <option value="1903" >1903</option>
            <option value="1902" >1902</option>
            <option value="1901" >1901</option>
            <option value="1900" >1900</option>
            <option value="1899" >1899</option>
            <option value="1898" >1898</option>
            <option value="1897" >1897</option>
            </select>
        </div>
        </div>
    </div>
    <div class="form-group mb-3">
        <input type="text" class="form-control" name="nama_wali" placeholder="Nama Wali">
    </div>
    <div class="form-group mb-3">
        <input type="text" class="form-control" name="hp_wali" maxlength="13" placeholder="No Hp Wali">
    </div>
    <div class="md-3">
        <button type="submit" class="btn btn-primary w-100"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="10" y1="14" x2="21" y2="3" /><path d="M21 3l-6.5 18a0.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a0.55 .55 0 0 1 0 -1l18 -6.5" /></svg>Simpan</button>
    </div>
</form>
<script>
    $(function(){
        $('.formSiswa').bootstrapValidator({
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