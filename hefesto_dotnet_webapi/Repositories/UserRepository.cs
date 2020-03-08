using System.Linq;
using System.Collections.Generic;
using hefesto_dotnet_webapi.Models;

namespace hefesto_dotnet_webapi.Repositories
{
    public static class UserRepository
    {
        public static User Get(string username, string password)
        {
            var users = new List<User>();
            users.Add(new User { Id = 1, UserName = "batman", Password = "batman", RoleId = 1, Role = RoleRepository.Get(1)});
            users.Add(new User { Id = 2, UserName = "robin", Password = "robin", RoleId = 2, Role = RoleRepository.Get(1)});
            return users.Where(x => x.UserName.ToLower() == username.ToLower() && x.Password == x.Password).FirstOrDefault();
        }
    }
}