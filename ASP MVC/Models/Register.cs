using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.ComponentModel.DataAnnotations;

namespace Registration.Models
{
    public class Register
    {
        [Required(ErrorMessage ="mandatory*")]
        [Display(Name="Name")]
        
        public string Name { get; set; }

        [Required(ErrorMessage = "mandatory*")]
        [Display(Name = "Address")]
        [DataType(DataType.MultilineText)]

        public string Address { get; set; }

        
       

        public  string Gender { get; set; }


        [Required(ErrorMessage = "mandatory*")]
        [Display(Name = "Email")]
        [DataType(DataType.EmailAddress)]
        public string Email { get; set; }

       
        public Course course { get; set; }
        [Required(ErrorMessage = "mandatory*")]
        [Display(Name = "Username")]
       
        public string Username { get; set; }

       
        [Required(ErrorMessage = "mandatory*")]
        [Display(Name = "password")]

        public string Password { get; set; }

    }
    
    public enum Course
    {
        mca,
        bca,
        others
    }
}