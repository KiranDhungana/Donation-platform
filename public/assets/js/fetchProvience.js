
function updateDistricts() {
    fetch('http://127.0.0.1:8000/assets/js/data.json')
      .then(response => response.json())
      .then(data => {
        const provinceData = data;
        console.log(provinceData)
        // Get references to the dropdowns
        const provinceDropdown = document.getElementById("province");
        const districtDropdown = document.getElementById("district");

        // Clear existing options in the district dropdown
        districtDropdown.innerHTML = '<option value="" selected disabled>Select District</option>';

        const selectedProvince = provinceDropdown.value;
        const districts = provinceData[selectedProvince];

        // Populate districts in the district dropdown
        for (const district in districts) {
          const option = document.createElement("option");
          option.value = district;
          option.text = district;
          districtDropdown.appendChild(option);
        }
      })
      .catch(error => console.error('Error fetching data:', error));
  }
