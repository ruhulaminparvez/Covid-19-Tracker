<style type="text/css">

html{
    scroll-behavior: smooth;
}

*{margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Chango', cursive, monospace;}

.nav_style{
    background-color: #14b1ab;
    
}

.nav_style a{
    color: white;
    
}

/*------MAIN HEADER------*/

.main_header{
    height: 450px;
    width: 100%;
}   

.slogan {
    text-transform: uppercase;
}

.rightside h1{
    font-size: 3rem;
}

.corona_title img{
    animation: corona 3s linear infinite;
}

@keyframes corona{
    0% {transform: rotate(0);}
    100% {transform: rotate(360deg);}
}

.corona_rot img{
    animation: gocorona 3s linear infinite;
}

@keyframes gocorona{
    0% {transform: rotate(0);}
    100% {transform: rotate(360deg);}
}

.leftside img{
    animation: heartbeat 5s linear infinite;
}

@keyframes heartbeat{
    0%{
        transform: scale(.75);
    }
    20%{
        transform: scale(1);
    }
    40%{
        transform: scale(.75);
    }
    60%{
        transform: scale(1);
    }
    80%{
        transform: scale(.75);
    }
    100%{
        transform: scale(.75);
    }
}

.btn{
    background-color: #14b1ab; /* Set the background color */
    color: white;
}

.btn:hover{
    background: #606060;
}


/* -------------------FOOTER SECTION----------------- */
.footer{
    margin-bottom: 0!important;
}

.footer_style{
    background-color: #14b1ab!important;
}
.footer_style p{
        margin-bottom: 0!important;
}

/* -----------------TOP SCROLL------------------------ */
#myBtn{
    display: none; /* Hidden by default */
    position: fixed; /* Fixed/Sticky position */
    bottom: 30px; /* Place the button at the bottom of the page */
    right: 40px; /* place the button 30px from the right */
    z-index: 99; /* Make sure it does not overlap */
    border: none; /* Remove borders */
    outline: none; /* Remove outline */
    background-color: #14b1ab; /* Set the background color */
    color: white; /* Text color */
    cursor: pointer; /* Add a mouse pointer on hver */
    padding: 10px; /* Some padding */
    border-radius: 10px; /* Rounded corners */
}

#myBtn:hover{
    background: #606060;
}


/*----------------RESPONSIVE------------------*/
@media(max-width: 768px){
    .main_header{height: 700px; text-align: center;}

    .main_header h1{
        text-align: center;
        padding: 0;
        width: 100%;
        font-size: 30px;
    }
}

.row{margin-left: 0!important; margin-right: 0!important;}

</style>