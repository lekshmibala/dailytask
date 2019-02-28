using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;

namespace Registration.Controllers
{
    public class RegController : Controller
    {
        //
        // GET: /Reg/
        public ActionResult Index()
        {
            return View();
        }
        public ActionResult Reg()
        {
            return View();
        }
	}
}