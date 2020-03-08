using Microsoft.EntityFrameworkCore;
using hefesto_dotnet_webapi.Models;

namespace hefesto_dotnet_webapi.Data
{
    public class DataContext : DbContext
    {
        public DataContext(DbContextOptions<DataContext> options)
            : base(options)
        {
        }

        public DbSet<Role> Roles { get; set;}

        public DbSet<User> Users { get; set;}
    }
}