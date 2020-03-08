using System.Collections.Generic;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;
using Microsoft.EntityFrameworkCore;
using hefesto_dotnet_webapi.Data;
using hefesto_dotnet_webapi.Models;

namespace hefesto_dotnet_webapi.Controllers
{
    [ApiController]
    [Route("v1/roles")]
    public class RoleController : ControllerBase
    {
        /*
        private DataContext _context;

        public RoleController(DataContext context)
        {
            _context = context;
        }
        */

        [HttpGet]
        [Route("")]
        public async Task<ActionResult<List<Role>>> Get([FromServices] DataContext context)
        {
            var roles = await context.Roles.ToListAsync();
            return roles;
        }

        [HttpPost]
        [Route("")]
        public async Task<ActionResult<Role>> Post(
            [FromServices] DataContext context,
            [FromBody] Role model)
        {
            if (ModelState.IsValid)
            {
                context.Roles.Add(model);
                await context.SaveChangesAsync();
                return model;
            }
            else
            {
                return BadRequest(ModelState);
            }
        }
    }
}