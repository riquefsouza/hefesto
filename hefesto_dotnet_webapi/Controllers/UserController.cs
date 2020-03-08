using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;
using Microsoft.EntityFrameworkCore;
using hefesto_dotnet_webapi.Data;
using hefesto_dotnet_webapi.Models;

namespace hefesto_dotnet_webapi.Controllers
{
    [ApiController]
    [Route("v1/users")]
    public class UserController : ControllerBase
    {
        [HttpGet]
        [Route("")]
        public async Task<ActionResult<List<User>>> Get([FromServices] DataContext context)
        {
            var users = await context.Users.Include(x => x.Role).ToListAsync();
            return users;
        }

        [HttpGet]
        [Route("{id:int}")]
        public async Task<ActionResult<User>> GetById([FromServices] DataContext context, int id)
        {
            var user = await context.Users.Include(x => x.Role)
                .AsNoTracking()
                .FirstOrDefaultAsync(x => x.Id == id);
            return user;
        }

        [HttpGet]
        [Route("roles/{id:int}")]
        public async Task<ActionResult<List<User>>> GetByRole([FromServices] DataContext context, int id)
        {
            var users = await context.Users.Include(x => x.Role)
                .AsNoTracking()
                .Where(x => x.RoleId == id)
                .ToListAsync();
            return users;
        }

        [HttpPost]
        [Route("")]
        public async Task<ActionResult<User>> Post(
            [FromServices] DataContext context,
            [FromBody] User model)
        {
            if (ModelState.IsValid)
            {
                context.Users.Add(model);
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