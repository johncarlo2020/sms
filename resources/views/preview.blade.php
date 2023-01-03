@extends('layouts.side') @section('survey')

    <!-- Preview Testing Show Survey List -->
    <div class="preview-survey-list hide">
        <div class="col-md-12">
            <div class="col-md-8" style="margin: 0 auto;">
                <h1 class="h3 mb-4 title-new-survey">
                    {{ $survey[0]->name }}
                </h1>
            </div>
        </div>
  
        <hr style="margin-top: 20px; border: 1px solid;">


        @foreach ($questions as $key => $value1)
            <div class="col-md-8" style="margin:0 auto;">
                <div class="col-md-12 row text-center align-middle" style="margin-bottom: 50px;">
                    <div class="preview-title-container">
                        <div class="dropdown preview-edit-container">
                            <button class="btn" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                            </button>

                            <ul class="dropdown-menu">
                                <li><button class="dropdown-item" type="button">Edit</button></li>
                                <li><button class="dropdown-item" type="button">Delete</button></li>
                            </ul>
                        </div>
                        <h4 class="h3 title-new-survey text-left text-capitalize">{{ $key + 1 }}. {{ $value1['name'] }}</h4>
                        <p class="text-left">{{ $value1['description'] }}</p>
                    </div>

                    @if($value1['type'] == 3)
                        <div class="form-check col-md-12 text-center align-mddle">
                            <input type="text" name="text answer" class="form-control" placeholder="Text Answer">
                        </div>
                    @endif

                    @foreach ($value1['answer'][0] as $key => $ans)
                        <div class="form-check col-md-12 row text-center align-middle" style="margin:0 auto;">
                            <input class="btn-check" type="radio" name="{{ $ans['id'] }}" id="{{ $ans['id'] }}" value="{{ $ans['id'] }}">
                            <label class="text-left select-preview btn bgPrimary text-black text-capitalize"
                                for="{{ $ans['id'] }}">{{ $ans->name }}</label>
                            <div class="preview-active-check-container hide">
                                <i class="fas fa-check preview-active-check" aria-hidden="true"></i>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        @endforeach
        <hr style="margin-top: 20px; border: 1px solid;">
        
        <div class="col-md-12 text-right">
            <div class="col-md-10" style="position: relative; right: 28px;">
                <button type="submit" class="btn bgPrimary text-white preview-survey-list-submit">Submit</button>
            </div>
        </div>
    </div>

    <div class="hide">
    <div class="preview-template-container">

<div class="section_title_container">
    <p class="section_title_h1">Section A: Part I: Socio-demographic Data of the Responden</p>
    <p class="section_description">Bahagian A: Bahagian I: Data Sosio-demografi Responden</p>
</div>

<table id="customers" style="margin-top: 50px;">
    <tr>
        <th class="max-100 min-100 wd-100">No.</th>
        <th class="max-200 min-200 wd-200">Item (Item)</th>
        <th colspan="2" class="max-500 min-500 wd-500">Personal Details (Maklumat Peribadi)</th>
        <th class="max-200 min-200 wd-200">Code (Kod)</th>
    </tr>
    <tr>
        <td>1.</td>
        <td>Name (Nama)</td>
        <td colspan="2"></td>
        <td></td>
    </tr>

    <tr class="max-500">
        <td rowspan="2">2.</td>
        <td rowspan="2">Respondent ID <br> (ID Responden)</td>
        <td colspan="2" style="position: relative;">
            NRIC / My KAD No (No Kad Pengenalan) <br> 
            <p>|_|_|_|_|_|_|_|_|_|_|_|_|</p>
            <!-- <hr class="hr_custom_table">
            <b>MRN</b> (if applicable) (jika berkenaan) -->
        </td>
        <td></td>
    </tr>

    <tr class="max-500">
        <td colspan="2">
            <b>MRN</b> (if applicable) (jika berkenaan) 
        </td>
        <td></td>
    </tr>

    <tr>
        <td>3.</td>
        <td>Respondent Address <br>
            & Contact Number <br>
            (Alamat & Nombor <br>
            Telefon Responden)</td>
        <td colspan="2">
            <p class="h-100px">Address (Alamat):</p>
            <hr class="hr_custom_table">
            <p class="h-50px">Mobile (Telefon Bimbit):</p>
            <hr class="hr_custom_table">
            <p class="margin-0">Other Telephone Number (Nombor Telefon Lain</p>
            <ol>
                <li>House (Rumah):</li>
                <li>Office (Pejabat):</li>
            </ol>
        </td>
        <td></td>
    </tr>
    <tr>
        <td>4.</td>
        <td>
            <p>Date of Birth <br> (Tarikh Lahir)</p>
        </td>
        <td class="wd-200 max-200 min-200">
            <span>
                _____/_______/________
            </span> <br>
            <span>Day&nbsp;&nbsp;&nbsp;</span>
            <span>Month&nbsp;&nbsp;&nbsp;</span>
            <span>Year</span>
            <br>
            <span>(Hari)&nbsp;&nbsp;&nbsp;</span>
            <span>(Bulan)&nbsp;&nbsp;&nbsp;</span>
            <span>(Tahun)</span>                        
        </td>
        <td>
            <span>Age: &nbsp;&nbsp;&nbsp; |__|__| years</span>
            <br>
            <span>(Umur)</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <span>(Tahun)</span>
        </td>
        <td></td>
    </tr>
    <tr>
        <td>5.</td>
        <td>Gender <br> (Jantina)</td>
        <td colspan="2">
            <span>Male:</span> <br>
            <span>Lelake</span>
            <div class="small_box"></div>

            <div class="custom_female_div">
                <span>Female:</span> <br>
                <span>Perempuan</span>
                <div class="small_box" style="margin-left: 96px;"></div>
            </div>
        </td>
        <td>
            <span>Male</span> <span class="float-right">= 1</span> <br>
            <span>Female</span> <span class="float-right">= 2</span>
        </td>
    </tr>
    <tr>
        <td>6.</td>
        <td>Ethnicity: <br> (Etnik)</td>
        <td class="w-300 max-300 min-300">
            <div> 
                <span>Malay (Melayu):</span> <br>                    
                <div class="small_box_center"></div>
            </div> <br>

            <div> 
                <span>Malay (Melayu):</span> <br>                    
                <div class="small_box_center"></div>
            </div> <br>

            <div> 
                <span>Malay (Melayu):</span> <br>                    
                <div class="small_box_center"></div>
            </div> 
        </td>
        <td>
            <div> 
                <span>Others (Lain-lain):</span> <br>                    
                <div class="small_box_center"></div>
            </div> <br>

            <p>
            Please specify: ______________________
            <br>
            <span>(Sila nyatakan)</span>
            </p>
        </td>
        <td>
            <span>Single</span> <span class="float-right">= 1</span> <br>
            <span>Married</span> <span class="float-right">= 2</span> <br>
            <span>Divorced</span> <span class="float-right">= 3</span> <br>
            <span>Widowed</span> <span class="float-right">= 4</span> <br>
            <span>Separated</span> <span class="float-right">= 5</span>                      
        </td>
    </tr>
    <tr>
        <td>7.</td>
        <td>Marital Status: <br> (Status Perkahwina)</td>
        <td colspan="2">
            <div> 
                <span>Single (Bujang):</span> <br>                    
                <div class="small_box_center" style="margin-left: 415px;"></div>
            </div> 
            <div> 
                <span>Divorced (Sudah Bercerai):</span> <br>                    
                <div class="small_box_center" style="margin-left: 415px;"></div>
            </div> 
            <div> 
                <span>Separated (Sudah Berpisah):</span> <br>                    
                <div class="small_box_center" style="margin-left: 415px;"></div>
            </div> 
            <div> 
                <span>Married (Sudah Berkahwin):</span> <br>                    
                <div class="small_box_center" style="margin-left: 415px;"></div>
            </div> 
            <div> 
                <span>Widowed (Janda):</span> <br>                    
                <div class="small_box_center" style="margin-left: 415px;"></div>
            </div> 
            <div> 
                <span>University Degree (Universiti Ijazah:</span> <br>                    
                <div class="small_box_center" style="margin-left: 415px;"></div>
            </div> 
        </td>
        <td>
            <span>No formal education</span> <span class="float-right">= 1</span> <br>
            <span>Primary school</span> <span class="float-right">= 2</span> <br>
            <span>Secondary school (F3)</span> <span class="float-right">= 3</span> <br>
            <span>Secondary school(F5)</span> <span class="float-right">= 4</span> <br>
            <span>College</span> <span class="float-right">= 5</span> <br>
            <span>University</span> <span class="float-right">= 6</span>  
        </td>
    </tr>
    <tr>
        <td>8.</td>
        <td>Level of Education: <br> (Tahap Pendidikan)</td>
        <td colspan="2">
            <div> 
                <span>No Formal Education (Tiada Pendidikan Formal:</span> <br>                    
                <div class="small_box_center" style="margin-left: 415px;"></div>
            </div> 
            <div> 
                <span>Primary School, Std 6 (Sekolah Rendah, Darjah 6):</span> <br>                    
                <div class="small_box_center" style="margin-left: 415px;"></div>
            </div> 
            <div> 
                <span>Secondary School, Form 3 (Sekolah Menengah, Tingkatan 3):</span> <br>                    
                <div class="small_box_center" style="margin-left: 415px;"></div>
            </div> 
            <div> 
                <span>Secondary School, Form 5 (Sekolah Menengah, Tingkatan 5):</span> <br>                    
                <div class="small_box_center" style="margin-left: 415px;"></div>
            </div> 
            <div> 
                <span>College / Diploma / Certificate (Kolej / Diploma / Sijil):</span> <br>                    
                <div class="small_box_center" style="margin-left: 415px;"></div>
            </div> 
            <div> 
                <span>University Degree (Universiti Ijazah:</span> <br>                    
                <div class="small_box_center" style="margin-left: 415px;"></div>
            </div> 
        </td>
        <td>
            <span>No formal education</span> <span class="float-right">= 1</span> <br>
            <span>Primary school</span> <span class="float-right">= 2</span> <br>
            <span>Secondary school (F3)</span> <span class="float-right">= 3</span> <br>
            <span>Secondary school(F5)</span> <span class="float-right">= 4</span> <br>
            <span>College</span> <span class="float-right">= 5</span> <br>
            <span>University</span> <span class="float-right">= 6</span>  
        </td>
    </tr>
    <tr>
        <td>9.</td>
        <td>Occupation <br> (Perkerjaan)</td>

        <td colspan="3">
            <span>Type of work: ____________________________________________________________________________________</span>
            <br>
            <span>(Jenis Perkerjaan)</span>
            <hr class="hr_custom_table">
            <span>Place of work: ____________________________________________________________________________________</span>
            <br>
            <span>(Tempat kerja)</span>
        </td>            
    </tr>
    </table>
</div>        


<div class="section_title_container">
    <p class="section_title_h1">Section A: Part II: Relationship of Respondent to Index Patient</p>
    <p class="section_description">Bahagian A: Bahagian II: Hubungan Responden dengan Pesakit Indeks</p>
</div>

<table id="customers" style="margin-top: 50px;">
    <tr>
        <td rowspan="3" class="max-100 min-100 wd-100">1.</td>
        <td rowspan="3" colspan="3"><b>Name and ID of Index Patient</b> <br> (Nama dan ID Pesakit Indeks)</td>
    </tr>
    <tr>                    
        <td colspan="3">T2DM / MRN or IC of index patient (T2DM / MRN atau IC Pesakit Indeks)</td>            
    </tr>
    <tr class="max-500">
        <td colspan="2" style="position: relative;">    
         ID - MRN            
        </td>
        <td>NRIC of index patient <br> (NRIC Pesakit Indeks)</td>
    </tr>

    <tr>
        <td rowspan="4" class="max-100 min-100 wd-100">2.</td>
        <td colspan="2"><b>Name of respondent </b> <br> (Nama Responden)</td>
        <td colspan="5">&nbsp;</td>
    </tr>

    <tr>
        <td rowspan="4" colspan="3" class="max-100 min-100 wd-100"><b>Respondent to Index Patient</b><br>(Hubungan dengan Pesakit Indeks</td>
        <td>
            <span>Father (Bapa)</span>
            <div class="small_box_center" style="margin-left: 280px;"></div> <br>

            <span>Mother (Emak)</span>
            <div class="small_box_center" style="margin-left: 280px;"></div> <br>

            <span>Spouse (Pasangan Suami/Isteri) </span>
            <div class="small_box_center" style="margin-left: 280px;"></div> <br>

            <span>Son (Anak Lelaki) </span>
            <div class="small_box_center" style="margin-left: 280px;"></div> <br>

            <span>Daughter (Anak Perempuan)</span>
            <div class="small_box_center" style="margin-left: 280px;"></div> <br>
        </td>
        <td colspan="2">
            <span>Father-in-law (Bapa Mertua</span>
            <div class="small_box_center" style="margin-left: 280px;"></div> <br>

            <span>Mother-in law (Emak Mertua</span>
            <div class="small_box_center" style="margin-left: 280px;"></div> <br>

            <span>Son-in-law (Menantu Lelaki) </span>
            <div class="small_box_center" style="margin-left: 280px;"></div> <br>

            <span>Daughter-in-law (Menantu Perempuan) </span>
            <div class="small_box_center" style="margin-left: 280px;"></div> <br>

            <span>Others – specify: 
                (Lain-lain – Nyatakan</span>
            <div class="small_box_center" style="margin-left: 280px;"></div> <br>
        </td>
    </tr>

</table>


<div class="section_title_container">
    <p class="section_title_h1">Section A: Part III: Socio-economic Information of the Respondent</p>
    <p class="section_description">Bahagian A: Bahagian III: Sosio-ekonomi Data Responden</p>
</div>

<table id="customers" style="margin-top: 50px;">
       <tbody>
                <tr>
                    <td><b>1. Number of People in Cohort Family</b> <br>(Bilangan Orang dalam Keluarga Kohort)</td>
                    <td>Total number of adults: ___________(Jumlah Orang Dewasa)</td>
                    <td>
                        Total number of children (between 1 day – 17 years age):(Jumlah anak antara 1 hari - 17 tahun)
                        <br><br>
                        <span>_____________</span>
                    </td>
                </tr>
                <tr>
                    <td><b>2. Number of People in Household</b> <br> (Bilangan Orang Dalam Isi Rumah)</td>
                    <td>Total number of adults: ___________ (Jumlah Orang Dewasa) </td>
                    <td>Total number of children (between 1 day – 17 years age): (Jumlah anak antara 1 hari - 17 tahun)</td>
                </tr>

                <tr>
                    <td colspan="3" style="border: none;">
                        <p><b>3. Details of Family Cohort</b> (Maklumat tentang Keluarga Kohort)</p>
                    </td>
                </tr>    
            
       </tbody>      
    
</table>

<table id="customers">
<tbody>
            <tr>
                    <td rowspan="2">No.</td>
                    <td rowspan="2">Name <br> (Nama)</td>
                    <td rowspan="2">Gender (Jantina)</td>
                    <td rowspan="2">Age</td>
                    <td rowspan="2">Year of Birth (Tahum Lahir)</td>
                    <td rowspan="2">
                        Relationship 
                        to Index <br>
                        Patient
                        (Hubungan <br>
                        dengan 
                        Pesakit <br>
                        Indeks)
                    </td>
                    <td class="text-center" colspan="3" rowspan="1">Employment status</td>
                    <td class="text-center">Member of Household of Index Patient:<br>Yes/No <br> <br> (Anggota Isi Rumah Sakit Pesakit Indeks: <br> Ya / Tidak)</td>
                </tr>

                <tr>
                    <td>Student (Pelajar)</td>
                    <td>Working (Bekerja)</td>
                    <td>Unemployed (Pengangguran)</td>
                    <td></td>
                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td colspan="10" style="border: none;">
                        <p><b>Total household income of index patient</b> (Jumlah pendapatan isi rumah pesakit indeks): </p>
                    </td>
                </tr>    

                <tr>
                    <td colspan="6">
                        <b>Household Income Group</b> <br>
                        (Kumpulan Pendapatan Isi Rumah)
                    </td>
                    <td colspan="2"><b>Income Range</b> (Julat Pendapatan</td>
                    <td colspan="2"><b>Please Tick</b> (Sila Tandakan)</td>
                </tr>

                <tr>
                    <td rowspan="4" colspan="2">B 40</td>
                    <td colspan="4">B1</td>
                    <td colspan="2">< 2,500</td>
                    <td colspan="2"></td>
                </tr>

                <tr>                        
                    <td colspan="4">B2</td>
                    <td colspan="2">2,500 – 316</td>
                    <td colspan="2"></td>
                </tr>

                <tr>                        
                    <td colspan="4">B3</td>
                    <td colspan="2">3170 – 3969</td>
                    <td colspan="2"></td>
                </tr>

                <tr>                        
                    <td colspan="4">B4</td>
                    <td colspan="2">3970 – 4849</td>
                    <td colspan="2"></td>
                </tr>

                <tr>
                    <td rowspan="4" colspan="2">M 40</td>
                    <td colspan="4">M1</td>
                    <td colspan="2">4850 - 5879</td>
                    <td colspan="2"></td>
                </tr>

                <tr>                        
                    <td colspan="4">M2</td>
                    <td colspan="2">5880-7099</td>
                    <td colspan="2"></td>
                </tr>

                <tr>                        
                    <td colspan="4">M3</td>
                    <td colspan="2">7110-8699</td>
                    <td colspan="2"></td>
                </tr>

                <tr>                        
                    <td colspan="4">M4</td>
                    <td colspan="2">8700-10959</td>
                    <td colspan="2"></td>
                </tr>

                <tr>
                    <td rowspan="2" colspan="2">T 20</td>
                    <td colspan="4">T1</td>
                    <td colspan="2">10960-15039</td>
                    <td colspan="2"></td>
                </tr>

                <tr>                        
                    <td colspan="4">T2</td>
                    <td colspan="2">15039 or more</td>
                    <td colspan="2"></td>
                </tr>
                
                <tr>
                    <td colspan="10" style="border: none;">Source: DOSM Malaysia</td>
                </tr>

                <tr>
                    <td colspan="10" style="border: none;">
                        <b>4. Receives monthly welfare /NGO aid: </b>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        YES /NO
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        Amount: _____________ <br>
                        (Menerima bantuan kebajikan / NGO bulanan): Ya / Tidak Jumlah: 
                        <br><br><br>
                        Name of NGO / organisation: __________________________________________________ <br>
                        (Nama NGO / organisasi)
                    </td>
                </tr>
       </tbody>
</table>

<div class="section_title_container">
    <p class="section_title_h1">Section A: Part IV: Health Status of the Respondent</p>
    <p class="section_description">Bahagian A: Bahagian IV: Status Kesihatan Responden</p>
</div>

<table id="customers" style="margin-top: 50px;">
       <tbody>
            <tr>
                <td colspan="7" style="border: none;"><b>4.1 Anthropometric Data</b> (Data Antropometrik)</td>
            </tr>

            <tr>
                <td class="max-300 min-300 wd-300" colspan="4"><b>Height</b> (Tinggi) <b>(cm)</b></td>
                <td class="max-300 min-300 wd-300"  colspan="4"> &nbsp;</td>
            </tr>

            <tr>
                <td class="max-300 min-300 wd-300" colspan="4"><b>Weight</b> (Berat Badan) <b>(kg)</b></td>
                <td class="max-300 min-300 wd-300"  colspan="4"> &nbsp;</td>
            </tr>

            <tr>
                <td class="max-300 min-300 wd-300" colspan="4"><b>Waist circumference</b> (Lilitan Pinggang) <b>(cm)</b></td>
                <td class="max-300 min-300 wd-300"  colspan="4"> &nbsp;</td>
            </tr>

            <tr>
                <td class="max-300 min-300 wd-300" colspan="4"><b>Hip circumference</b> (Lingkaran pinggul) <b>(cm)</b></td>
                <td class="max-300 min-300 wd-300"  colspan="4"> &nbsp;</td>
            </tr>

            <tr>
                <td class="max-300 min-300 wd-300" colspan="4"><b>Waist / Hip Ratio</b> (Nisbah Pinggang / Pinggul)</td>
                <td class="max-300 min-300 wd-300"  colspan="4"> &nbsp;</td>
            </tr>
        </tbody>
</table>
    </div>

    <!-- Preview Testing New Survey -->
    <div class="preview-new-survey-container col-md-12 row text-center align-middle margin-top-15percent">
        <h1 class="h3 mb-4 preview-new-survey-title">
            New Survey
        </h1>
        <p class="preview-new-survey-desc">Dear Sir or Madam, </p>
        <p class="preview-new-survey-desc">Please take a few minutes of your time to complete the following questionaire.</p>
        <button class="preview-notice-btn col-md-4 margin-0-auto preview-new-survey-start" type="submit">START SURVEY NOW</button>
    </div>

    </div>
    </div>

    <!-- Thank you Feedback -->
    <div class="col-md-12 row text-center ty-feedback-container margin-top-15percent" style="display: none;">
        <h1 class="h3 mb-4 preview-new-survey-title">
            <span><i class="fas fa-thumbs-up fa-fw" style="font-size: 115px;"></i></span>
        </h1>
        <p class="preview-new-survey-desc" style="font-size: 40px !important;">Thank you for your time and your feedback.
        </p>
        <p class="preview-new-survey-desc" style="font-size: 26px !important;">Share this survey to help us get more
            responses.</p>
        <span>
            <i class="fas fa-plus fa-fw social-media-icons"></i>
            <i class="fas fa-plus fa-fw social-media-icons"></i>
            <i class="fas fa-plus fa-fw social-media-icons"></i>
            <i class="fas fa-plus fa-fw social-media-icons"></i>
        </span>
        <!-- <button class="preview-notice-btn col-md-4 margin-0-auto preview-new-survey-start" type="submit">START SURVEY NOW</button>                     -->
    </div>
@endsection
