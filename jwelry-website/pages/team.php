<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <link rel="stylesheet" href="../assets/css/team.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!--  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
    href="https://fonts.googleapis.com/css2?family=Finger+Paint&family=Noto+Serif:ital,wght@0,100..900;1,100..900&family=Playwrite+IN:wght@100..400&display=swap"
    rel="stylesheet">
    <!-- For AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Meet the Team</title>
</head>

<body>
<?php
include '../includes/header.php'; 
?>

    <h1>Meet the Team</h1>
    <div class="team-container" id="team" data-aos="flip-left"></div>
    <?php
include '../includes/footer.php'; 
?>
</body>
<script>
    const teamMembers = [
        { name: "Mathur Ji", role: "CEO", image: "../assets/images/team2.jpg" },
        { name: "Rohit Baghel", role: "CTO", image: "../assets/images/team1.jpg" },
        { name: "Aman Diwakar", role: "Designer", image: "../assets/images/team2.jpg" }
    ];

    const teamContainer = document.getElementById("team");

    teamMembers.forEach(member => {
        const memberDiv = document.createElement("div");
        memberDiv.classList.add("team-member");
        memberDiv.innerHTML = `
            <img src="${member.image}" alt="${member.name}">
            <h3>${member.name}</h3>
            <p>${member.role}</p>
        `;
        teamContainer.appendChild(memberDiv);
    });
</script>
<!-- Main Js -->
<script src="../assets/js/script.js"></script>
<!-- For scroll animation -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</html>