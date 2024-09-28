<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>portfolio</title>
  </head>
  <body>
    <?php include 'header.php'; ?>
    <div class="cert-container">
      <h1>Welcome to my resume, I am an aspiring IT student with a passion for technology and a strong desire to learn and grow in the field.</h1>
			<p>As an IT student, I am driven by a passion for technology and a desire to learn and grow in this exciting and constantly evolving field. Through my coursework and projects, I have gained hands-on experience in a range of areas, from programming and data analysis to web development and networking.

My education has provided me with a strong foundation in key technical skills, such as coding languages, database management, and software development. But I also recognize the importance of soft skills, such as communication, collaboration, and problem-solving, which are essential for success in any work environment.

I am eager to apply my skills and knowledge to real-world challenges and to contribute to the development of innovative solutions that drive positive change. Whether it is creating a new software application or improving an existing process, I am excited to take on new challenges and push the boundaries of what is possible.</p>

      <a href="Jose's resume.pdf" download><button class="btn">Download Resume</button></a>
		</div>
    <div class="accordion">
      <div class="contentBx">
        <div class="label">Contact Info</div>
        <div class="content">
          <p>Age: 20 years old</p>
          <p>Birthdate: April 15,2002</p>
          <p>Address: Zulueta st. Sto. Rosario Malolos, Bulacan</p>
          <p>Contact no: 0947 602 2183</p>
          <p>Student e-mail: josemari.ayag.p@bulsu.edu.ph</p>
          <p>Personal e-mail: ayagjosemari@gmail.com</p>
        </div>
      </div>
      <div class="contentBx">
        <div class="label">Educational Attainment</div>
        <div class="content">
          <p>City of Malolos Integrated School - Sto. Rosario</p>
          <p>La Consolacion University Philippines</p>
          <p>Bulacan State University - Hagonoy Campus</p>
        </div>
      </div>
      <div class="contentBx">
        <div class="label">Skills</div>
        <div class="content">
          <p>My extensive knowledge and hands-on experience in programming languages such as C++, HTML, CSS, Java, JavaScript, PHP, and MySQL allow me to confidently tackle complex software development projects and create robust web solutions. Whether it's designing and implementing innovative algorithms, building dynamic user interfaces, or optimizing database performance, I possess the skills and expertise to deliver high-quality results. With a strong attention to detail, excellent problem-solving abilities, and a passion for staying up-to-date with the latest technologies and trends, I am committed to continuously improving my programming skills and providing value to any team or organization I work with.</p>
        </div>
      </div>
      <div class="contentBx">
        <div class="label">Interests & Hobbies</div>
        <div class="content">
          <p>In my free time, I enjoy a variety of activities such as playing badminton, watching movies, playing video games, listening to music, indulging in coding projects, and exploring my creativity through digital art.</p>
        </div>
      </div>
      <div class="contentBx">
        <div class="label">References</div>
        <div class="content">
          <p>Mary Jane Ayag - 0913 987 0231</p>
          <p>Franz Mikhail Torres - 0923 976 1240</p>
          <p>Emmanuel Bautista - 0973 176 2097</p>
        </div>
      </div>
      <div class="qoute-container">
        <h1>"Don't be afraid to fail. It's not the end of the world, and in many ways, it's the first step toward learning something and getting better at it."
        </h1>
        <h1>-jon hamm</h1>
      </div>
    </div>
    <script>
      const accordion = document.getElementsByClassName('contentBx');

      for(let i = 0; i < accordion.length; i++){
        accordion[i].addEventListener('click', function(){
          this.classList.toggle('active');
        })
      }
    </script>
    <script src="effect.js"></script>
  </body>
  <?php include 'footer.php'; ?>
</html>
