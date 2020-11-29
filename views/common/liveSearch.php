  <script>
  $( function() {
   
    var stateObject = [
                    "Delhi",
                    "Chandigrah",
                "Anantapur, Andhra Pradesh",
                "Chittoor, Andhra Pradesh",
                "East Godavari, Andhra Pradesh",
                "Guntur, Andhra Pradesh",
                "Krishna, Andhra Pradesh",
                "Kurnool, Andhra Pradesh",
                "Nellore, Andhra Pradesh",
                "Prakasam, Andhra Pradesh",
                "Srikakulam, Andhra Pradesh",
                "Visakhapatnam, Andhra Pradesh",
                "Vizianagaram, Andhra Pradesh",
                "West Godavari, Andhra Pradesh",
                "YSR Kadapa, Andhra Pradesh",
          
                "Tawang, Arunachal Pradesh",
                "West Kameng, Arunachal Pradesh",
                "East Kameng, Arunachal Pradesh",
                "Papum Pare, Arunachal Pradesh",
                "Kurung Kumey, Arunachal Pradesh",
                "Kra Daadi, Arunachal Pradesh",
                "Lower Subansiri, Arunachal Pradesh",
                "Upper Subansiri, Arunachal Pradesh",
                "West Siang, Arunachal Pradesh",
                "East Siang, Arunachal Pradesh",
                "Siang, Arunachal Pradesh",
                "Upper Siang, Arunachal Pradesh",
                "Lower Siang, Arunachal Pradesh",
                "Lower Dibang Valley, Arunachal Pradesh",
                "Dibang Valley, Arunachal Pradesh",
                "Anjaw, Arunachal Pradesh",
                "Lohit, Arunachal Pradesh",
                "Namsai, Arunachal Pradesh",
                "Changlang, Arunachal Pradesh",
                "Tirap, Arunachal Pradesh",
               
        
                "Baksa, Assam",
                "Barpeta, Assam",
                "Biswanath, Assam",
                "Bongaigaon, Assam",
                "Cachar, Assam",
                "Charaideo, Assam",
                "Chirang, Assam",
                "Darrang, Assam",
                "Dhemaji, Assam",
                "Dhubri, Assam",
                "Dibrugarh, Assam",
                "Goalpara, Assam",
                "Golaghat, Assam",
                "Hailakandi, Assam",
                "Hojai, Assam",
                "Jorhat, Assam",
                "Kamrup Metropolitan, Assam",
                "Kamrup, Assam",
                "Karbi Anglong, Assam",
                "Karimganj, Assam",
                "Kokrajhar, Assam",
                "Lakhimpur, Assam",
                "Majuli, Assam",
                "Morigaon, Assam",
                "Nagaon, Assam",
                "Nalbari, Assam",
                "Dima Hasao, Assam",
                "Sivasagar, Assam",
                "Sonitpur, Assam",
                "South Salmara-Mankachar, Assam",
                "Tinsukia, Assam",
                "Udalguri, Assam",
                "West Karbi Anglong",
            
                "Araria, Bihar",
                "Arwal, Bihar",
                "Aurangabad, Bihar",
                "Banka, Bihar",
                "Begusarai, Bihar",
                "Bhagalpur, Bihar",
                "Bhojpur, Bihar",
                "Buxar, Bihar",
                "Darbhanga, Bihar",
                "East Champaran (Motihari), Bihar",
                "Gaya, Bihar",
                "Gopalganj, Bihar",
                "Jamui, Bihar",
                "Jehanabad, Bihar",
                "Kaimur (Bhabua), Bihar",
                "Katihar, Bihar",
                "Khagaria, Bihar",
                "Kishanganj, Bihar",
                "Lakhisarai, Bihar",
                "Madhepura, Bihar",
                "Madhubani, Bihar",
                "Munger (Monghyr), Bihar",
                "Muzaffarpur, Bihar",
                "Nalanda, Bihar",
                "Nawada, Bihar",
                "Patna, Bihar",
                "Purnia (Purnea), Bihar",
                "Rohtas, Bihar",
                "Saharsa, Bihar",
                "Samastipur, Bihar",
                "Saran, Bihar",
                "Sheikhpura, Bihar",
                "Sheohar, Bihar",
                "Sitamarhi, Bihar",
                "Siwan, Bihar",
                "Supaul, Bihar",
                "Vaishali, Bihar",
               
          
                "Balod, Chhattisgarh",
                "Baloda Bazar, Chhattisgarh",
                "Balrampur, Chhattisgarh",
                "Bastar, Chhattisgarh",
                "Bemetara, Chhattisgarh",
                "Bijapur, Chhattisgarh",
                "Bilaspur, Chhattisgarh",
                "Dantewada (South Bastar), Chhattisgarh",
                "Dhamtari, Chhattisgarh",
                "Durg, Chhattisgarh",
                "Gariyaband, Chhattisgarh",
                "Janjgir-Champa, Chhattisgarh",
                "Jashpur, Chhattisgarh",
                "Kabirdham (Kawardha), Chhattisgarh",
                "Kanker (North Bastar), Chhattisgarh",
                "Kondagaon, Chhattisgarh",
                "Korba, Chhattisgarh",
                "Korea (Koriya), Chhattisgarh",
                "Mahasamund, Chhattisgarh",
                "Mungeli, Chhattisgarh",
                "Narayanpur, Chhattisgarh",
                "Raigarh, Chhattisgarh",
                "Raipur, Chhattisgarh",
                "Rajnandgaon, Chhattisgarh",
                "Sukma, Chhattisgarh",
                "Surajpur, Chhattisgarh",
                "Surguja, Chhattisgarh",
          
                "Central Delhi",
                "East Delhi",
                "New Delhi",
                "North Delhi",
                "North East  Delhi",
                "North West  Delhi",
                "Shahdara",
                "South Delhi",
                "South East Delhi",
                "South West  Delhi",
                "West Delhi",
          
                "North Goa",
                "South Goa",
         
                "Ahmedabad, Gujarat",
                "Amreli, Gujarat",
                "Anand, Gujarat",
                "Aravalli, Gujarat",
                "Banaskantha (Palanpur), Gujarat",
                "Bharuch, Gujarat",
                "Bhavnagar, Gujarat",
                "Botad, Gujarat",
                "Chhota Udepur, Gujarat",
                "Dahod, Gujarat",
                "Dangs (Ahwa), Gujarat",
                "Devbhoomi Dwarka, Gujarat",
                "Gandhinagar, Gujarat",
                "Gir Somnath, Gujarat",
                "Jamnagar, Gujarat",
                "Junagadh, Gujarat",
                "Kachchh, Gujarat",
                "Kheda (Nadiad), Gujarat",
                "Mahisagar, Gujarat",
                "Mehsana, Gujarat",
                "Morbi, Gujarat",
                "Narmada (Rajpipla), Gujarat",
                "Navsari, Gujarat",
                "Panchmahal (Godhra), Gujarat",
                "Patan, Gujarat",
                "Porbandar, Gujarat",
                "Rajkot, Gujarat",
                "Sabarkantha (Himmatnagar), Gujarat",
                "Surat, Gujarat",
                "Surendranagar, Gujarat",
                "Tapi (Vyara), Gujarat",
                "Vadodara, Gujarat",
                "Valsad, Gujarat",
                "Ambala, Haryana",
                "Bhiwani, Haryana",
                "Charkhi Dadri, Haryana",
                "Faridabad, Haryana",
                "Fatehabad, Haryana",
                "Gurgaon, Haryana",
                "Hisar, Haryana",
                "Jhajjar, Haryana",
                "Jind, Haryana",
                "Kaithal, Haryana",
                "Karnal, Haryana",
                "Kurukshetra, Haryana",
                "Mahendragarh, Haryana",
                "Mewat, Haryana",
                "Palwal, Haryana",
                "Panchkula, Haryana",
                "Panipat, Haryana",
                "Rewari, Haryana",
                "Rohtak, Haryana",
                "Sirsa, Haryana",
                "Sonipat, Haryana",
                "Yamunanagar, Haryana",
                "Bilaspur, Himachal Pradesh",
                "Chamba, Himachal Pradesh",
                "Hamirpur, Himachal Pradesh",
                "Kangra, Himachal Pradesh",
                "Kinnaur, Himachal Pradesh",
                "Kullu, Himachal Pradesh",
                "Lahaul &amp; Spiti, Himachal Pradesh",
                "Mandi, Himachal Pradesh",
                "Shimla, Himachal Pradesh",
                "Sirmaur (Sirmour), Himachal Pradesh",
                "Solan, Himachal Pradesh",
                "Una, Himachal Pradesh",
                "Anantnag, Jammu and Kashmir",
                "Bandipore, Jammu and Kashmir",
                "Baramulla, Jammu and Kashmir",
                "Budgam, Jammu and Kashmir",
                "Doda, Jammu and Kashmir",
                "Ganderbal, Jammu and Kashmir",
                "Jammu, Jammu and Kashmir",
                "Kargil, Jammu and Kashmir",
                "Kathua, Jammu and Kashmir",
                "Kishtwar, Jammu and Kashmir",
                "Kulgam, Jammu and Kashmir",
                "Kupwara, Jammu and Kashmir",
                "Leh, Jammu and Kashmir",
                "Poonch, Jammu and Kashmir",
                "Pulwama, Jammu and Kashmir",
                "Rajouri, Jammu and Kashmir",
                "Ramban, Jammu and Kashmir",
                "Reasi, Jammu and Kashmir",
                "Samba, Jammu and Kashmir",
                "Shopian, Jammu and Kashmir",
                "Srinagar, Jammu and Kashmir",
                "Udhampur, Jammu and Kashmir",
                "Bokaro, Jharkhand",
                "Chatra, Jharkhand",
                "Deoghar, Jharkhand",
                "Dhanbad, Jharkhand",
                "Dumka, Jharkhand",
                "East Singhbhum, Jharkhand",
                "Garhwa, Jharkhand",
                "Giridih, Jharkhand",
                "Godda, Jharkhand",
                "Gumla, Jharkhand",
                "Hazaribag, Jharkhand",
                "Jamtara, Jharkhand",
                "Khunti, Jharkhand",
                "Koderma, Jharkhand",
                "Latehar, Jharkhand",
                "Lohardaga, Jharkhand",
                "Pakur, Jharkhand",
                "Palamu, Jharkhand",
                "Ramgarh, Jharkhand",
                "Ranchi, Jharkhand",
                "Sahibganj, Jharkhand",
                "Seraikela-Kharsawan, Jharkhand",
                "Simdega, Jharkhand",
                "West Singhbhum, Jharkhand",
                "Bagalkot, Karnataka",
                "Ballari (Bellary), Karnataka",
                "Belagavi (Belgaum), Karnataka",
                "Bengaluru (Bangalore), Karnataka",
                "Bidar, Karnataka",
                "Chamarajanagar, Karnataka",
                "Chikballapur, Karnataka",
                "Chikkamagaluru (Chikmagalur), Karnataka",
                "Chitradurga, Karnataka",
                "Dakshina Kannada, Karnataka",
                "Davangere, Karnataka",
                "Dharwad, Karnataka",
                "Gadag, Karnataka",
                "Hassan, Karnataka",
                "Haveri, Karnataka",
                "Kalaburagi (Gulbarga), Karnataka",
                "Kodagu, Karnataka",
                "Kolar, Karnataka",
                "Koppal, Karnataka",
                "Mandya, Karnataka",
                "Mysuru (Mysore), Karnataka",
                "Raichur, Karnataka",
                "Ramanagara, Karnataka",
                "Shivamogga (Shimoga), Karnataka",
                "Tumakuru (Tumkur), Karnataka",
                "Udupi, Karnataka",
                "Uttara Kannada (Karwar), Karnataka",
                "Vijayapura (Bijapur), Karnataka",
                "Yadgir, Karnataka",
                "Alappuzha, Kerala",
                "Ernakulam, Kerala",
                "Idukki, Kerala",
                "Kannur, Kerala",
                "Kasaragod, Kerala",
                "Kollam, Kerala",
                "Kottayam, Kerala",
                "Kozhikode, Kerala",
                "Malappuram, Kerala",
                "Palakkad, Kerala",
                "Pathanamthitta, Kerala",
                "Thiruvananthapuram, Kerala",
                "Thrissur, Kerala",
                "Wayanad, Kerala",
                "Agatti, Lakshadweep",
                "Amini, Lakshadweep",
                "Androth, Lakshadweep",
                "Bithra, Lakshadweep",
                "Chethlath, Lakshadweep",
                "Kavaratti, Lakshadweep",
                "Kadmath, Lakshadweep",
                "Kalpeni, Lakshadweep",
                "Kilthan, Lakshadweep",
                "Minicoy, Lakshadweep",
                "Agar Malwa, Madhya Pradesh",
                "Alirajpur, Madhya Pradesh",
                "Anuppur, Madhya Pradesh",
                "Ashoknagar, Madhya Pradesh",
                "Balaghat, Madhya Pradesh",
                "Barwani, Madhya Pradesh",
                "Betul, Madhya Pradesh",
                "Bhind, Madhya Pradesh",
                "Bhopal, Madhya Pradesh",
                "Burhanpur, Madhya Pradesh",
                "Chhatarpur, Madhya Pradesh",
                "Chhindwara, Madhya Pradesh",
                "Damoh, Madhya Pradesh",
                "Datia, Madhya Pradesh",
                "Dewas, Madhya Pradesh",
                "Dhar, Madhya Pradesh",
                "Dindori, Madhya Pradesh",
                "Guna, Madhya Pradesh",
                "Gwalior, Madhya Pradesh",
                "Harda, Madhya Pradesh",
                "Hoshangabad, Madhya Pradesh",
                "Indore, Madhya Pradesh",
                "Jabalpur, Madhya Pradesh",
                "Jhabua, Madhya Pradesh",
                "Katni, Madhya Pradesh",
                "Khandwa, Madhya Pradesh",
                "Khargone, Madhya Pradesh",
                "Mandla, Madhya Pradesh",
                "Mandsaur, Madhya Pradesh",
                "Morena, Madhya Pradesh",
                "Narsinghpur, Madhya Pradesh",
                "Neemuch, Madhya Pradesh",
                "Panna, Madhya Pradesh",
                "Raisen, Madhya Pradesh",
                "Rajgarh, Madhya Pradesh",
                "Ratlam, Madhya Pradesh",
                "Rewa, Madhya Pradesh",
                "Sagar, Madhya Pradesh",
                "Satna, Madhya Pradesh",
                "Sehore, Madhya Pradesh",
                "Seoni, Madhya Pradesh",
                "Shahdol, Madhya Pradesh",
                "Shajapur, Madhya Pradesh",
                "Sheopur, Madhya Pradesh",
                "Shivpuri, Madhya Pradesh",
                "Sidhi, Madhya Pradesh",
                "Singrauli, Madhya Pradesh",
                "Tikamgarh, Madhya Pradesh",
                "Ujjain, Madhya Pradesh",
                "Umaria, Madhya Pradesh",
                "Vidisha, Madhya Pradesh",
                "Ahmednagar, Maharashtra",
                "Akola, Maharashtra",
                "Amravati, Maharashtra",
                "Aurangabad, Maharashtra",
                "Beed, Maharashtra",
                "Bhandara, Maharashtra",
                "Buldhana, Maharashtra",
                "Chandrapur, Maharashtra",
                "Dhule, Maharashtra",
                "Gadchiroli, Maharashtra",
                "Gondia, Maharashtra",
                "Hingoli, Maharashtra",
                "Jalgaon, Maharashtra",
                "Jalna, Maharashtra",
                "Kolhapur, Maharashtra",
                "Latur, Maharashtra",
                "Mumbai City, Maharashtra",
                "Mumbai Suburban, Maharashtra",
                "Nagpur, Maharashtra",
                "Nanded, Maharashtra",
                "Nandurbar, Maharashtra",
                "Nashik, Maharashtra",
                "Osmanabad, Maharashtra",
                "Palghar, Maharashtra",
                "Parbhani, Maharashtra",
                "Pune, Maharashtra",
                "Raigad, Maharashtra",
                "Ratnagiri, Maharashtra",
                "Sangli, Maharashtra",
                "Satara, Maharashtra",
                "Sindhudurg, Maharashtra",
                "Solapur, Maharashtra",
                "Thane, Maharashtra",
                "Wardha, Maharashtra",
                "Washim, Maharashtra",
                "Yavatmal, Maharashtra",
                "Bishnupur, Manipur",
                "Chandel, Manipur",
                "Churachandpur, Manipur",
                "Imphal East, Manipur",
                "Imphal West, Manipur",
                "Jiribam, Manipur",
                "Kakching, Manipur",
                "Kamjong, Manipur",
                "Kangpokpi, Manipur",
                "Noney, Manipur",
                "Pherzawl, Manipur",
                "Senapati, Manipur",
                "Tamenglong, Manipur",
                "Tengnoupal, Manipur",
                "Thoubal, Manipur",
                "Ukhrul, Manipur",
                "East Garo Hills, Meghalaya",
                "East Jaintia Hills, Meghalaya",
                "East Khasi Hills, Meghalaya",
                "North Garo Hills, Meghalaya",
                "Ri Bhoi, Meghalaya",
                "South Garo Hills, Meghalaya",
                "South West Garo Hills , Meghalaya",
                "South West Khasi Hills, Meghalaya",
                "West Garo Hills, Meghalaya",
                "West Jaintia Hills, Meghalaya",
                "West Khasi Hills, Meghalaya",
                "Aizawl, Mizoram",
                "Champhai, Mizoram",
                "Kolasib, Mizoram",
                "Lawngtlai, Mizoram",
                "Lunglei, Mizoram",
                "Mamit, Mizoram",
                "Saiha, Mizoram",
                "Serchhip, Mizoram",
                "Dimapur, Nagaland",
                "Kiphire, Nagaland",
                "Kohima, Nagaland",
                "Longleng, Nagaland",
                "Mokokchung, Nagaland",
                "Mon, Nagaland",
                "Peren, Nagaland",
                "Phek, Nagaland",
                "Tuensang, Nagaland",
                "Wokha, Nagaland",
                "Zunheboto, Nagaland",
                "Angul, Odisha",
                "Balangir, Odisha",
                "Balasore, Odisha",
                "Bargarh, Odisha",
                "Bhadrak, Odisha",
                "Boudh, Odisha",
                "Cuttack, Odisha",
                "Deogarh, Odisha",
                "Dhenkanal, Odisha",
                "Gajapati, Odisha",
                "Ganjam, Odisha",
                "Jagatsinghapur, Odisha",
                "Jajpur, Odisha",
                "Jharsuguda, Odisha",
                "Kalahandi, Odisha",
                "Kandhamal, Odisha",
                "Kendrapara, Odisha",
                "Kendujhar (Keonjhar), Odisha",
                "Khordha, Odisha",
                "Koraput, Odisha",
                "Malkangiri, Odisha",
                "Mayurbhanj, Odisha",
                "Nabarangpur, Odisha",
                "Nayagarh, Odisha",
                "Nuapada, Odisha",
                "Puri, Odisha",
                "Rayagada, Odisha",
                "Sambalpur, Odisha",
                "Sonepur, Odisha",
                "Sundargarh, Odisha",
                "Karaikal, Puducherry",
                "Mahe, Puducherry",
                "Pondicherry, Puducherry",
                "Yanam, Puducherry",
                "Amritsar, Punjab",
                "Barnala, Punjab",
                "Bathinda, Punjab",
                "Faridkot, Punjab",
                "Fatehgarh Sahib, Punjab",
                "Fazilka, Punjab",
                "Ferozepur, Punjab",
                "Gurdaspur, Punjab",
                "Hoshiarpur, Punjab",
                "Jalandhar, Punjab",
                "Kapurthala, Punjab",
                "Ludhiana, Punjab",
                "Mansa, Punjab",
                "Moga, Punjab",
                "Muktsar, Punjab",
                "Nawanshahr (Shahid Bhagat Singh Nagar), Punjab",
                "Pathankot, Punjab",
                "Patiala, Punjab",
                "Rupnagar, Punjab",
                "Sahibzada Ajit Singh Nagar (Mohali), Punjab",
                "Sangrur, Punjab",
                "Tarn Taran, Punjab",
                "Ajmer, Rajasthan",
                "Alwar, Rajasthan",
                "Banswara, Rajasthan",
                "Baran, Rajasthan",
                "Barmer, Rajasthan",
                "Bharatpur, Rajasthan",
                "Bhilwara, Rajasthan",
                "Bikaner, Rajasthan",
                "Bundi, Rajasthan",
                "Chittorgarh, Rajasthan",
                "Churu, Rajasthan",
                "Dausa, Rajasthan",
                "Dholpur, Rajasthan",
                "Dungarpur, Rajasthan",
                "Hanumangarh, Rajasthan",
                "Jaipur, Rajasthan",
                "Jaisalmer, Rajasthan",
                "Jalore, Rajasthan",
                "Jhalawar, Rajasthan",
                "Jhunjhunu, Rajasthan",
                "Jodhpur, Rajasthan",
                "Karauli, Rajasthan",
                "Kota, Rajasthan",
                "Nagaur, Rajasthan",
                "Pali, Rajasthan",
                "Pratapgarh, Rajasthan",
                "Rajsamand, Rajasthan",
                "Sawai Madhopur, Rajasthan",
                "Sikar, Rajasthan",
                "Sirohi, Rajasthan",
                "Sri Ganganagar, Rajasthan",
                "Tonk, Rajasthan",
                "Udaipur, Rajasthan",
                "East Sikkim",
                "North Sikkim",
                "South Sikkim",
                "West Sikkim",
                "Ariyalur, Tamil Nadu",
                "Chennai, Tamil Nadu",
                "Coimbatore, Tamil Nadu",
                "Cuddalore, Tamil Nadu",
                "Dharmapuri, Tamil Nadu",
                "Dindigul, Tamil Nadu",
                "Erode, Tamil Nadu",
                "Kanchipuram, Tamil Nadu",
                "Kanyakumari, Tamil Nadu",
                "Karur, Tamil Nadu",
                "Krishnagiri, Tamil Nadu",
                "Madurai, Tamil Nadu",
                "Nagapattinam, Tamil Nadu",
                "Namakkal, Tamil Nadu",
                "Nilgiris, Tamil Nadu",
                "Perambalur, Tamil Nadu",
                "Pudukkottai, Tamil Nadu",
                "Ramanathapuram, Tamil Nadu",
                "Salem, Tamil Nadu",
                "Sivaganga, Tamil Nadu",
                "Thanjavur, Tamil Nadu",
                "Theni, Tamil Nadu",
                "Thoothukudi (Tuticorin), Tamil Nadu",
                "Tiruchirappalli, Tamil Nadu",
                "Tirunelveli, Tamil Nadu",
                "Tiruppur, Tamil Nadu",
                "Tiruvallur, Tamil Nadu",
                "Tiruvannamalai, Tamil Nadu",
                "Tiruvarur, Tamil Nadu",
                "Vellore, Tamil Nadu",
                "Viluppuram, Tamil Nadu",
                "Virudhunagar, Tamil Nadu",
                "Adilabad, Telangana",
                "Bhadradri Kothagudem, Telangana",
                "Hyderabad, Telangana",
                "Jagtial, Telangana",
                "Jangaon, Telangana",
                "Jayashankar Bhoopalpally, Telangana",
                "Jogulamba Gadwal, Telangana",
                "Kamareddy, Telangana",
                "Karimnagar, Telangana",
                "Khammam, Telangana",
                "Komaram Bheem Asifabad, Telangana",
                "Mahabubabad, Telangana",
                "Mahabubnagar, Telangana",
                "Mancherial, Telangana",
                "Medak, Telangana",
                "Medchal, Telangana",
                "Nagarkurnool, Telangana",
                "Nalgonda, Telangana",
                "Nirmal, Telangana",
                "Nizamabad, Telangana",
                "Peddapalli, Telangana",
                "Rajanna Sircilla, Telangana",
                "Rangareddy, Telangana",
                "Sangareddy, Telangana",
                "Siddipet, Telangana",
                "Suryapet, Telangana",
                "Vikarabad, Telangana",
                "Wanaparthy, Telangana",
                "Warangal, Telangana",
                "Yadadri Bhuvanagiri, Telangana",
                "Dhalai, Tripura",
                "Gomati, Tripura",
                "Khowai, Tripura",
                "North Tripura, Tripura",
                "Sepahijala, Tripura",
                "South Tripura, Tripura",
                "Unakoti, Tripura",
                "West Tripura, Tripura",
                "Almora, Uttarakhand",
                "Bageshwar, Uttarakhand",
                "Chamoli, Uttarakhand",
                "Champawat, Uttarakhand",
                "Dehradun, Uttarakhand",
                "Haridwar, Uttarakhand",
                "Nainital, Uttarakhand",
                "Pauri Garhwal, Uttarakhand",
                "Pithoragarh, Uttarakhand",
                "Rudraprayag, Uttarakhand",
                "Tehri Garhwal, Uttarakhand",
                "Udham Singh Nagar, Uttarakhand",
                "Uttarkashi, Uttarakhand",
                "Agra, Uttar Pradesh",
                "Aligarh, Uttar Pradesh",
                "Allahabad, Uttar Pradesh",
                "Ambedkar Nagar, Uttar Pradesh",
                "Amethi (Chatrapati Sahuji Mahraj Nagar), Uttar Pradesh",
                "Amroha (J.P. Nagar), Uttar Pradesh",
                "Auraiya, Uttar Pradesh",
                "Azamgarh, Uttar Pradesh",
                "Baghpat, Uttar Pradesh",
                "Bahraich, Uttar Pradesh",
                "Ballia, Uttar Pradesh",
                "Balrampur, Uttar Pradesh",
                "Banda, Uttar Pradesh",
                "Barabanki, Uttar Pradesh",
                "Bareilly, Uttar Pradesh",
                "Basti, Uttar Pradesh",
                "Bhadohi, Uttar Pradesh",
                "Bijnor, Uttar Pradesh",
                "Budaun, Uttar Pradesh",
                "Bulandshahr, Uttar Pradesh",
                "Chandauli, Uttar Pradesh",
                "Chitrakoot, Uttar Pradesh",
                "Deoria, Uttar Pradesh",
                "Etah, Uttar Pradesh",
                "Etawah, Uttar Pradesh",
                "Faizabad, Uttar Pradesh",
                "Farrukhabad, Uttar Pradesh",
                "Fatehpur, Uttar Pradesh",
                "Firozabad, Uttar Pradesh",
                "Gautam Buddha Nagar, Uttar Pradesh",
                "Noida, Uttar Pradesh",
                "Ghaziabad, Uttar Pradesh",
                "Ghazipur, Uttar Pradesh",
                "Gonda, Uttar Pradesh",
                "Gorakhpur, Uttar Pradesh",
                "Hamirpur, Uttar Pradesh",
                "Hapur (Panchsheel Nagar), Uttar Pradesh",
                "Hardoi, Uttar Pradesh",
                "Hathras, Uttar Pradesh",
                "Jalaun, Uttar Pradesh",
                "Jaunpur, Uttar Pradesh",
                "Jhansi, Uttar Pradesh",
                "Kannauj, Uttar Pradesh",
                "Kanpur Dehat, Uttar Pradesh",
                "Kanpur Nagar, Uttar Pradesh",
                "Kanshiram Nagar (Kasganj), Uttar Pradesh",
                "Kaushambi, Uttar Pradesh",
                "Kushinagar (Padrauna), Uttar Pradesh",
                "Lakhimpur - Kheri, Uttar Pradesh",
                "Lalitpur, Uttar Pradesh",
                "Lucknow, Uttar Pradesh",
                "Maharajganj, Uttar Pradesh",
                "Mahoba, Uttar Pradesh",
                "Mainpuri, Uttar Pradesh",
                "Mathura, Uttar Pradesh",
                "Mau, Uttar Pradesh",
                "Meerut, Uttar Pradesh",
                "Mirzapur, Uttar Pradesh",
                "Moradabad, Uttar Pradesh",
                "Muzaffarnagar, Uttar Pradesh",
                "Pilibhit, Uttar Pradesh",
                "Pratapgarh, Uttar Pradesh",
                "RaeBareli, Uttar Pradesh",
                "Rampur, Uttar Pradesh",
                "Saharanpur, Uttar Pradesh",
                "Sambhal (Bhim Nagar), Uttar Pradesh",
                "Sant Kabir Nagar, Uttar Pradesh",
                "Shahjahanpur, Uttar Pradesh",
                "Shamali (Prabuddh Nagar), Uttar Pradesh",
                "Shravasti, Uttar Pradesh",
                "Siddharth Nagar, Uttar Pradesh",
                "Sitapur, Uttar Pradesh",
                "Sonbhadra, Uttar Pradesh",
                "Sultanpur, Uttar Pradesh",
                "Unnao, Uttar Pradesh",
                "Varanasi, Uttar Pradesh",
                "Alipurduar, West Bengal",
                "Bankura, West Bengal",
                "Birbhum, West Bengal",
                "Burdwan (Bardhaman), West Bengal",
                "Cooch Behar, West Bengal",
                "Dakshin Dinajpur (South Dinajpur), West Bengal",
                "Darjeeling, West Bengal",
                "Hooghly, West Bengal",
                "Howrah, West Bengal",
                "Jalpaiguri, West Bengal",
                "Kalimpong, West Bengal",
                "Kolkata, West Bengal",
                "Malda, West Bengal",
                "Murshidabad, West Bengal",
                "Nadia, West Bengal",
                "North 24 Parganas, West Bengal",
                "Paschim Medinipur (West Medinipur), West Bengal",
                "Purba Medinipur (East Medinipur), West Bengal",
                "Purulia, West Bengal",
                "South 24 Parganas, West Bengal",
                "Uttar Dinajpur (North Dinajpur), West Bengal"
           
    ];


    $( "#tags" ).autocomplete({
      source: stateObject
    });

     $( ".tags" ).autocomplete({
      source: stateObject
    });
  } );
  </script>