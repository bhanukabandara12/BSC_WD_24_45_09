document.getElementById('searchButton').addEventListener('click', function () {
    // Get selected category from input
    const category = document.getElementById('categoryInput').value;

    // Define navigation URLs for categories
    const categoryUrls = {
        "Marketing": "jobs.php#first",
        "Customer Service": "jobs.php#custom",
        "Human Resource": "jobs.php#human",
        "Project Management": "jobs.php#prma",
        "Business Development": "jobs.php#bude",
        "Sales & Communication": "jobs.php#sale",
        "Teaching & Education": "jobs.php#teach",
        "Design & Creative": "jobs.php#desi"
    };

    // Check if a valid category is selected
    if (categoryUrls[category]) {
        // Redirect to the category URL
        window.location.href = categoryUrls[category];
    } else {
        alert("Please select a valid category before searching.");
    }
});
