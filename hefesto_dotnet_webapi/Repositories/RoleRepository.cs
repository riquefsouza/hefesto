using System.Linq;
using System.Collections.Generic;
using hefesto_dotnet_webapi.Models;

namespace hefesto_dotnet_webapi.Repositories
{
    public static class RoleRepository
    {
        public static Role Get(int id)
        {
            var roles = new List<Role>();
            roles.Add(new Role { Id = 1, Description = "manager"});
            roles.Add(new Role { Id = 2, Description = "employee"});
            return roles.Where(x => x.Id == id).FirstOrDefault();
        }
    }
}